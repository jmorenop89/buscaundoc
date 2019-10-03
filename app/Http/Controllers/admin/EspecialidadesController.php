<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Especialidad;

class EspecialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espec = Especialidad::all();

        return view('admin.especialidades.index',compact('espec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('admin.especialidades.add');
    }
    public function agregar(Request $request)
    {
        //
        $data = $request->all();
        Especialidad::create($data);
        return redirect()->route('espec.index');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        //
        return view('admin.especialidades.index',compact('espec'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editar($id)
    {

        $espec = Especialidad::find($id);

        return view('admin.especialidades.edit',compact('espec'));
    }

    public function actualizar(Request $request, $id)
    {
        $data = $request->all();
        $espec = Especialidad::find($id);
        
        $espec->update($data);
        $espec->save();
      
       return redirect()->route('espec.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
}
