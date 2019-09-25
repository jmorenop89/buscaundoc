<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineController extends Controller
{
    public function index(){
    	return view('online.index');
    }
    public function regpac(){
    	return view('online.registrar.paciente');
    }
    public function regdoc(){
    	return view('online.registrar.doctor');	
    }
    public function paciente(){
    	return view('online.log-pac.index');
    }
    public function doctor(){
    	return view('online.log-doc.index');
    }
    public function busqueda(){
    	return view('online.reserva_cita.listado');
    }
    public function det_hora(){
    	return view('online.reserva_cita.detalle');
    }
    
}
