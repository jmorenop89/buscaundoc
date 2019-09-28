<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(){
    	return view('admin.usuario.index');
    }
    public function index(){
    	return view('admin.reportes.index');
    }
}
