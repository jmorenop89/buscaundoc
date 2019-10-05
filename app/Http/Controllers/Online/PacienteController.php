<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PacienteRequest;
use App\Paciente;
use App\User;
use Illuminate\Support\Carbon;

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
        return view('online.login.confirmado');
    }
}
