<?php

namespace App\Http\Controllers\admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ciudad;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $ciud = Ciudad::all();

        return view('admin.ciudades.index',compact('ciud'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('admin.ciudades.add');
    }
    public function agregar(Request $request)
    {
        //
        $data = $request->all();
        Ciudad::create($data);
        return redirect()->route('ciud.index');
        
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
        return view('admin.ciudades.index',compact('ciud'));
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
        $ciud = Ciudad::find($id);
        
        return view('admin.ciudades.edit',compact('ciud'));
    }

    public function actualizar(Request $request, $id)
    {
        $data = $request->all();
        $ciud = Ciudad::find($id);
                
        $ciud->update($data);
        $ciud->save();
      
       return redirect()->route('ciud.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
