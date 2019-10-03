<?php

namespace App\Http\Controllers;

use App\Especialidad;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\response;

class EspecialidadController extends Controller
{
    public function index()
    {
        $pac = Especialidad::all();
        return response($pac);

    }
    public function crear()
    {
        //
        return view('admin.paciente.add');
    }
    public function agregar(Request $request)
    {
        $data = $request->all();
        Especialidad::create($data);
        return response($pac);
    }
    public function editar($id)
    {
        $pac = Especialidad::find($id);
        return response($pac);
    }

    public function actualizar(Request $request, $id)
    {
        $data = $request->all();
        $pac = Especialidad::find($id);
        /*dd($data,$alumno);*/
        $pac->update($data);
        $pac->save();
       /*dd($alumno);*/
       return redirect()->route('pac.index');
    }
    public function eliminar($id)
    {
        $pac = Especialidad::find($id);
        $pac->delete();
        return redirect()->route('pac.index');
    }
}
