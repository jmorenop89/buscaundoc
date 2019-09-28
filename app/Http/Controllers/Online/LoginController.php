<?php

namespace App\Http\Controllers\Online;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{

	use AuthenticatesUsers;

	public function index(){
		return view('online.login.login');
	}
	
 	public function login(Request $request)
	{
	    if ($this->request->is('post')) {
	        $user = $this->Auth->identify($user);
	        if ($user) {
	            $this->Auth->setUser($user);
	            return $this->redirect($this->Auth->redirectUrl());
	        }
	        $this->Flash->error(__('Usuario o contraseña invalidos intentelo nuevamente'));
	    }
	}
	public function dlogin(){
		return view('online.login.confirmado');
	}

	public function logout(Request $request)
	{
	    $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
}
