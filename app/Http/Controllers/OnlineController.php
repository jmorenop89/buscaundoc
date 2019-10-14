<?php

namespace App\Http\Controllers;

use App\Ciudad;
use App\Disponibilidad;
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

    public function busqueda(Request $request){
        $data = $request->all();
        //dd($request);
        //paginacion
        $pager = @$request['pager']?$request['pager']:5;

        $es = $request['specialty']?$request['specialty']:null;
        if ($request['specialty']===null) {
            $especial = "";
        }else{
        $especial = Especialidad::where('nombre','=',$es)->get('id');
        $especial = $especial[0]->id;

        };
        //dd($especial->id);
        //dd($especial);
        $ci = $request['city']?$request['city']:null;
        if ($request['city']===null) {
            $ciud = "";
        }else{
        $ciud = Ciudad::where('nombre','like',$ci.'%')->get();
        $ciud = $ciud[0]->id;
        }
        $doc = Doctor::where('especialidad_id','like',$especial)->where('ciudad_id','like',$ciud)->paginate($pager);
        //dd($doc);
    	return view('online.reservar_cita.listadoc',compact('doc','pager','data'));
    }

    public function det_hora($id){

        $doc = Doctor::find($id);
        $dis = Disponibilidad::where('doctor_id','=',$doc->id)->get();
        $fil = $dis->unique('fecha')->values();
        $horas = array();
            //dd($fil);
            for ($i=0; $i < $fil->count() ; $i++) {
                # code...
                for ($e=0; $e < $dis->count() ; $e++) {
                    //dd($fil);
                    if($fil[$i]->fecha === $dis[$e]->fecha){
                        $horas[] =$dis[$e]->hora;
                    }
                }
                $fil[$i]->hora = $horas;
                $horas = array();
            }
        //dd($fil);
    	return view('online.reservar_cita.detalle',compact('doc','dis'));
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
    public function probar(Request $request ,$id){
        //dd($request);
    }
}
