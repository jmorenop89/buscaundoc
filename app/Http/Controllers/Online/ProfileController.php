<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->role == 'paciente'){
            $model = $user->paciente;
                      
            return view('online.log-pac.index',compact('model','modela'));
        }else{
            $model = $user->doctor;
            return view('online.log-doc.index',compact('model'));
        }
    }
}
