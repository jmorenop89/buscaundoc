<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\User;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pac = Paciente::all();
        /*dd($pac->id);
        $users = User::where('id','')->get();
        //dd($objects);*/
        
        return view('admin.paciente.index',compact('pac'));
        
    }
    public function crear()
    {
        //
        return view('admin.paciente.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function agregar(Request $request)
    {
        //
        $data = $request->all();
        $data['role'] = "paciente";
        $data['password'] = bcrypt($data['password']);
        $use = User::create($data);
        $data['users_id'] = $use->id;
        Paciente::create($data);

        //redirect: redireccionar a la url o ruta especifica (alias)
        return redirect()->route('pac.index');
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
        return view('admin.paciente.index',compact('pac'));
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

        $pac = Paciente::find($id);

        return view('admin.paciente.edit',compact('pac'));
    }

    public function actualizar(Request $request, $id)
    {
        $data = $request->all();
        $pac = Paciente::find($id);
        /*dd($data,$alumno);*/
        $pac->update($data);
        $pac->save();
       /*dd($alumno);*/
       return redirect()->route('pac.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        //
        $pac = Paciente::find($id);
        $pac->delete();
        return redirect()->route('pac.index');
    }
}
