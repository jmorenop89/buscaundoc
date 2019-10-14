<?php

namespace App\Http\Controllers\Online;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Doctor;
use App\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function register(DoctorRequest $request){
        $data = $request->all();
        $date = Carbon::createFromFormat('d/m/Y', $data['fecha_nac']);
        $data['fecha_nac'] = $date->format('Y-m-d');
        $data['role'] = "doctor";
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $data['user_id'] = $user->id;
        Doctor::create($data);
        $bi = $data['nombres'];
        return view('online.login.confirmado',compact('bi'));
    }

    public function edit(Request $request,$id){
        $data = $request->all();
        $model = Doctor::find($id);
        $model->update($data);
        $model->save();
        //dd($model);
        return redirect()->route('profile');
    }
}
