<?php

namespace App\Http\Controllers\Online;

use App\Cita;
use App\Disponibilidad;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paciente;

class CitaController extends Controller
{
    //
    public function reservar(Request $request ,$id){
        // dd($request);
        $fecha = $request['fecha'];
        $hora = $request['radio_time'][0];
        $d_i = $request['doctor_id'];
        // dd($d_i);
        $dispo = Disponibilidad::where('fecha', '=',$fecha)->where('hora','=',$hora)->where('doctor_id','=',$d_i)->get();
        // dd($dispo[0]);
        $di_id = $dispo[0]->id;
        // dd($di_id);
        $pac = Paciente::where('users_id','=',$id)->get();
        //dd($pac[0]);
        $pac = $pac[0]->id;
        //dd($pac);
        Cita::create([
            'disponibilidad_id'=>$di_id,
            'paciente_id'=>$pac,
        ]);
        $dispo[0]->estado = 'activo';
        $dispo[0]->save();
        return view('online.reservar_cita.confirmado');
    }

    public function order_asc($id){
        $cita = Cita::where('id', '=', $id)->get();
    return view('online.profile.view',compact('cita'));
    }
}
