<?php

namespace App\Http\Controllers\Online;

use App\Cita;
use App\Disponibilidad;
use App\Doctor;
use App\Http\Controllers\Controller;
use App\Library\Croppic;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->role == 'paciente'){
            $model = $user->paciente;
            //dd($user->id);
            $pac = Paciente::where('users_id','=',$user->id)->get();
            $pac =$pac[0]->id;
            $cita = Cita::where('paciente_id','=',$pac)->get();
            setlocale(LC_TIME, "es_CO.UTF-8");
            $fecha = array();
            $hora = array();
            for ($i=0; $i < $cita->count(); $i++) {
                # code...
            //dd($cita->count());
            $fecha[$i] = ucfirst(strftime("%A ".date("d/m/Y",strtotime($cita[$i]->disponibilidad->fecha))));
            $hora[$i] = strftime("%I:%M %p",strtotime($cita[$i]->disponibilidad->hora));
            }
            //dd($hora[0]);
            //dd($hora);
            return view('online.log-pac.index',compact('model','cita','fecha','hora'));
        }else{
            $model = $user->doctor;          
            $fecha = Disponibilidad::get();
            $fil = $fecha->unique('fecha')->values();
            // $json = $fecha->toJson();
            $horas = array();
            //dd($fil);
            for ($i=0; $i < $fil->count() ; $i++) {
                # code...
                for ($e=0; $e < $fecha->count() ; $e++) {
                    //dd($fil);
                    if($fil[$i]->fecha === $fecha[$e]->fecha){
                        $horas[] =$fecha[$e]->hora;
                    }
                }
                $fil[$i]->hora = $horas;
                $horas = array();
            }
            //dd($fil[0]->hora[0]);
            //dd($fecha[0]);
            //dd($fecha->unique('fecha'));
            return view('online.log-doc.index',compact('model','fil'));
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
