<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Doctor;
use App\Especialidad;
use Illuminate\Http\Request;

class OnlineController extends Controller
{
    public function index(){
        $objects = Doctor::all();      
    	return view('online.index', compact('objects'));
    }

    public function regpac(){
    	return view('online.registrar.paciente');
    }

    public function regdoc(){
        $espe = Especialidad::all();
        $ciud = Ciudad::all();
        #dd($espe);
    	return view('online.registrar.doctor', compact('espe','ciud'));	
    }

    public function paciente(){
    	return view('online.log-pac.index');
    }

    public function doctor(){
    	return view('online.log-doc.index');
    }

    public function busqueda(){
    	return view('online.reservar_cita.listadoc');
    }

    public function det_hora(){
    	return view('online.reservar_cita.detalle');
    }

    public function prueba(){
        return "estamos haciendo algo mal";
    }
    

    public function json_specialty(){
        $model = Especialidad::all('id','nombre as name')
            ->toJson(JSON_UNESCAPED_UNICODE);
        return response($model);
    }

    public function json_city(){
        $model = Ciudad::all('id','nombre as name')
            ->toJson(JSON_UNESCAPED_UNICODE);
        return response($model);
    }
}
