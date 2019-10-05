<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\User;

class DoctorController extends Controller
{
    public function register(Request $request){
        $data = $request->all();
        #dd($data);
        $data['role'] = "doctor";
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $data['user_id'] = $user->id;
        $patient = Doctor::create($data);
        $bi = $data['nombres'];
        return view('online.login.confirmado',compact('bi'));
    }
}
