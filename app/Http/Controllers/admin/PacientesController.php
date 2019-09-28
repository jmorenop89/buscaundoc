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
        //
          //----ORM -----
        // ORM -> trabajando una paginacion (4 elementos)
        $pac = Paciente::paginate(10);
        $pac = Paciente::all();
        $pac = Paciente::first();
        /*$pac = Paciente::where('nombres','like','%a%')->get();*/
        $pac = Paciente::where('nombres','like','%a%')
            ->orWhere('apellidos','like','%a%')
            ->get();
        /*dd($pac->id);
        $users = User::where('id','')->get();
        //dd($objects);*/
        
        return view('admin.paciente.index',compact('pac'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
          //----ORM -----
        // ORM -> trabajando una paginacion (4 elementos)
        $pac = Paciente::get($id);
        dd($pac);
        //dd($objects);
        
        return view('admin.paciente.index',compact('pac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
