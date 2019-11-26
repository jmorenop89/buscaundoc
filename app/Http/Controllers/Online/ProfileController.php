<?php

namespace App\Http\Controllers\Online;

use App\Cita;
use App\Disponibilidad;
use App\Doctor;
use App\Http\Controllers\Controller;
use App\Library\Croppic;
use App\Paciente;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->role == 'paciente'){
            $model = $user->paciente;
            $cita = Cita::where('paciente_id','=',$model->id)->get();
            // dd($cita[1]->disponibilidad->doctor->nombres);
            setlocale(LC_TIME, "es_CO.UTF-8");
            $fecha = array();
            $hora = array();

            for ($i=0; $i < $cita->count(); $i++) {

                $fec = $cita[$i]->disponibilidad->fecha;

                $fecha[$i] = ucfirst(strftime("%A ",strtotime($cita[$i]->disponibilidad->fecha)).date("d/m/Y", strtotime($fec)));
                $hora[$i] = strftime("%I:%M %p",strtotime($cita[$i]->disponibilidad->hora));

            }
            return view('online.profile.paciente.paciente',compact('model','cita','fecha','hora'));
        }
        else{
            $model = $user->doctor;
            $fecha = Disponibilidad::where('doctor_id','=',$model->id)->orderBy('hora', 'asc')->get();
            $fil = $fecha->unique('fecha')->values();
            $horas = array();
            setlocale(LC_TIME, "es_CO.UTF-8");
            for ($i=0; $i < $fil->count() ; $i++) {
                # code...
                for ($e=0; $e < $fecha->count() ; $e++) {
                    if($fil[$i]->fecha === $fecha[$e]->fecha){
                        //dump($fecha[$e]->id);
                        $horas[] =['hora'=>$fecha[$e]->hora,'id'=>$fecha[$e]->id];
                        //$horas[] ='id'=>$fecha[$e]->id;
                    }
                }
                $fil[$i]->hora = $horas;
                $horas = array();
            }
            return view('online.profile..doctor.doctor-agregar',compact('model','fil'));
        }
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
