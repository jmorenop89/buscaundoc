<?php

namespace App\Http\Controllers\admin;

use App\Cita;
use App\Disponibilidad;
use App\Doctor;
use App\Http\Controllers\Controller;
use App\Paciente;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pac = Paciente::all()->count();
        $doc = Doctor::all()->count();
        //dd($pac);
        $cit = Cita::all();
        // $dis = Disponibilidad::where('estado', '=','activo');
        $dis = Disponibilidad::where('estado','=','activo')->get();
        $cont = array();
        for ($i=0; $i <$dis->unique('doctor_id')->count() ; $i++) {
            $pro = $dis->unique('doctor_id')->values()[$i]->doctor;
            $cont[$i]['nombre'] = $pro->nombres;
            $cont[$i]['nro'] = Disponibilidad::where('estado','=','activo')->where('doctor_id','=',$pro->id)->count();
            $nombre[$i] = $cont[$i]['nombre'];
            $nro[$i] = $cont[$i]['nro'];
        }
        array_multisort($nro,SORT_DESC,$cont);
        // dd($cont);
        return view('admin.reportes.index',compact('pac','doc','cont'));
    }

}
