<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Paciente;
use App\Cita;

class DashboardController extends Controller
{
    public function index()
    {
        $pac = Paciente::all()->count();
        $doc = Doctor::all()->count();
        //dd($pac);
               
        return view('admin.reportes.index',compact('pac','doc'));
    }
    
}
