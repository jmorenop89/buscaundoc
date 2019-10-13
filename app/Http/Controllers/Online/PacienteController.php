<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PacienteRequest;
use App\Paciente;
use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    public function register(PacienteRequest $request){
        $data = $request->all();
        $date = Carbon::createFromFormat('d/m/Y', $data['fecha_nac']);
        $data['fecha_nac'] = $date->format('Y-m-d');
        $data['role'] = "paciente";
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $data['users_id'] = $user->id;
        Paciente::create($data);
        $bi = $data['nombres'];
        return view('online.login.confirmado',compact('bi'));
    }

    public function edit(Request $request,$id){
        $data = $request->all();
        $model = Paciente::find($id);
        $model->update($data);
        $model->save();
        //dd($model);
        return redirect()->route('profile');
    }
    /* Pruebas */
    /*public function edit() {
        $user = Auth::user();
        dd($user);
        //$object = Paciente::find($id);
        //dd($object);
    }*/
}
