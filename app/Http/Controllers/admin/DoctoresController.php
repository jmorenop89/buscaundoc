<?php

namespace App\Http\Controllers\admin;

use App\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $doc = Doctor::all();
        /*dd($pac->id);
        $users = User::where('id','')->get();
        //dd($objects);*/
        
        return view('admin.doctor.index',compact('doc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        //
        return view('admin.doctor.add');
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
        return view('admin.doctor.index',compact('doc'));
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
        //
        $doc = Doctor::find($id);

        return view('admin.doctor.edit',compact('doc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, $id)
    {
        //
        $data = $request->all();
        $doc = Doctor::find($id);
        //dd($data);
        $doc->update($data);
        $doc->save();
       /*dd($alumno);*/
       return redirect()->route('doc.index');

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
