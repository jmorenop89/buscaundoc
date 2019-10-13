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
        //dd($request);
        $fecha = $request['fecha'];
        $hora = $request['radio_time'][0];
        //dd($hora);
        $dispo = Disponibilidad::where('fecha', '=',$fecha)->where('hora','=',$hora)->get();
        //dd($dispo);
        $dispo = $dispo[0]->id;
        $pac = Paciente::where('users_id','=',$id)->get();
        //dd($pac[0]);
        $pac = $pac[0]->id;
        //dd($pac);
        Cita::create([
            'disponibilidad_id'=>$dispo,
            'paciente_id'=>$pac,
        ]);
        return view('online.reservar_cita.confirmado');                         

    }
}
