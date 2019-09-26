<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paciente;

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
        $objects = Paciente::paginate(10);
        //ORM select * from artista
        $objects = Paciente::all();
        $objects = Paciente::first();
        //dd($objects);
        
        $objects = Paciente::where('nombre','like','%a%')->get();
        $objects = Paciente::where('nombre','like','%a%')
            ->orWhere('nacionalidad','like','%a%')
            ->get();
        dd($objects);
        //-----DB--------
        //_DB => select from artista//
        $ar = DB::table('paciente')->get();
        $ar = DB::table('paciente')->first();
        
        $ar = DB::table('paciente')->where('nombre','like','%a%')->get();
        $ar = DB::table('paciente')
            ->where('nombre','like','%a%')
            ->where('nacionalidad','like','%c%')
            ->get();
        $ar = DB::table('paciente')
            ->where('nombre','like','%r%')
            ->orWhere('nacionalidad','like','%w%')
            ->get();
        $ar = DB::table('paciente')->orderBy('id','desc')->get();
        $ar = DB::table('paciente')->orderBy('nacionalidad','asc')->get(); 
        $x = 'je';
        $ar = DB::table('paciente')
            ->where('nombre','like','%'.$x.'%')
            ->orWhere('nacionalidad','like','%'.$x.'%')
            ->get();
        $ar = DB::table('paciente')->skip(0)->take(5)->get();
        
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
