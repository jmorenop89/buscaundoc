<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
    	return view('admin.login.index');
    }

    public function login(Request $request){
        $data = $request->all();
        $val = [
            'email' => $data['email'],
            'password' => $data['password']
        ];
        if (Auth::attempt($val)){
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect()->route('dash.index');
            }else{
                Auth::logout();
                Redirect::back()->with('error_message', 'Invalid data')->withInput();
            }
        }
        
        return Redirect::back()->with('error_message', 'Invalid data')->withInput();
    }
}
