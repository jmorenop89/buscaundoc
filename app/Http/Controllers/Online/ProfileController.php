<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        if($user->role == 'paciente'){
            return view('online.log-pac.index');
        }else{
            return view('online.log-doc.index');
        }
    }
}
