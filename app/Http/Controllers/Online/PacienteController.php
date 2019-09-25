<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paciente;
use App\User;

class PacienteController extends Controller
{
    public function register(Request $request){
        $data = $request->all();
        $user = User($data);
        dd();
        $data['user_id'] = $user->id;
        $patient = Paciente($data);

    }
}
