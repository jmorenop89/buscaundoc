<?php

namespace App\Http\Controllers\Online;

use App\Disponibilidad;
use App\Doctor;
use App\Http\Controllers\Controller;
use App\Library\Croppic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->role == 'paciente'){
            $model = $user->paciente;

            return view('online.log-pac.index',compact('model','modela'));
        }else{
            $model = $user->doctor;
            return view('online.log-doc.index',compact('model'));
        }
    }
    public function guardar_horarios(Request $request,$id){
        $data = $request->all();
        //dd($fecha);
        //dd($data['radio_time']);
        foreach ($data['hora'] as $key) {
            $dispo = Disponibilidad::create([
                'fecha'=>$data['fecha'],
                'hora'=>$key,
                'doctor_id'=>$id
            ]);
        };
        //dd($dispo);
        $request->session()->flash('status', 'Horarios agregados correctamente');
        return redirect()->route('profile');
    }

    public function store_image(){
        $data = request()->all();
        $model = Doctor::find($data['id']);
        $url_image = config('app.dir_image');
        $croppic_img = array(250, 250);
        $response = Croppic::croppic_imagen(
            $data,
            'doc'.$data['id'],
            $url_image,
            $croppic_img);
        if ($response['status'] == 'success') {
            $response['image'] = $response['url'];
            $response['url'] = '/' . $url_image . $response['url'];
            if($model){
                $model->imagen = $response['image'];
                $model->save();
                $response['state'] = 200;
                $response['id'] = $model->id;
            }
        }else{
            $response['state'] = 500;
        }

        return response()->json($response);
    }

    public function delete_image(){
        $data = request()->all();
        $model = Doctor::find($data['id']);
        $url_image = config('app.dir_image');
        if($model){
            unlink($url_image.$model->imagen);
            $model->imagen = null;
            $model->save();
            return response()->json([
                'status' => 200
            ]);
        }else{
            return response()->json([
                'status' => 500
            ]);
        }
    }
}
