<?php

namespace App\Http\Controllers\Online;

use App\Cita;
use App\Disponibilidad;
use App\Doctor;
use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function hor(){
        $model = Auth::user()->doctor;

        $fecha = Disponibilidad::where('doctor_id','=',$model->id)->orderBy('hora', 'asc')->get();
            $fil = $fecha->unique('fecha')->values();
            $horas = array();
            setlocale(LC_TIME, "es_CO.UTF-8");
            for ($i=0; $i < $fil->count() ; $i++) {
                # code...
                for ($e=0; $e < $fecha->count() ; $e++) {
                    if($fil[$i]->fecha === $fecha[$e]->fecha){
                        //dump($fecha[$e]->id);
                        $horas[] =['hora'=>$fecha[$e]->hora,'id'=>$fecha[$e]->id];
                        //$horas[] ='id'=>$fecha[$e]->id;
                    }
                }
                $fil[$i]->hora = $horas;
                $horas = array();
            }

        return view("online.profile.doctor.doctor-horarios",compact('model','fil'));
    }
    public function cit(){
        $model = Auth::user()->doctor;

        $dis=Disponibilidad::where('doctor_id','=',$model->id)->where('estado','=','activo')->get();
            // dd($dis);
            $cita = Cita::all();
            // dd($cita);
            $citas = new Collection;

                // dd($cita[0]);
                for ($i=0; $i <count($dis) ; $i++) {
                   // for ($j=0; $j <count($dis) ; $j++){
                   //     if($cita[$i]->disponibilidad_id == $dis[$j]->id){
                   //          $cita[$i] = $cita[$i];
                   //      }
                   //  }
                    $dat= Cita::where('disponibilidad_id','=',$dis[$i]->id)->get();
                    $citas->push($dat[0]);
                }

        return view("online.profile.doctor.doctor-ver-citas",compact('model','citas'));
    }
    public function conf(){
        $model = Auth::user()->doctor;
        return view("online.profile.doctor.doctor-config",compact('model'));
    }
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
        return redirect()->route('doctor.conf');
    }

    public function guardar_horarios(Request $request,$id){
        $data = $request->all();
        //dd($fecha);
        if (count(array($data),1) > 4) {
            foreach ($data['hora'] as $key) {
            Disponibilidad::create([
                    'fecha'=>$data['fecha'],
                    'hora'=>$key,
                    'estado'=>'inactivo',
                    'doctor_id'=>$id
                ]);
            // dd(Disponibilidad::all());
            }
            $request->session()->flash('status', 'Horarios agregados');
            return redirect()->route('profile')->with('success','Horarios agregados');
        }
        else{
            $query =Disponibilidad::where('hora','=',$data['hora'])->get();
            //dd(count($query));
            if (count($query) > 0){
                return Redirect::back()->with('error','Horario no disponible');
            }
            else{
            Disponibilidad::create([
                    'fecha'=>$data['fecha'],
                    'hora'=>$data['hora'],
                    'estado'=>"inactivo",
                    'doctor_id'=>$id
                ]);
            return redirect()->route('doctor.hor')->with('success','Horario agregado');
            }
        }
    }

    public function dele_hora($id){
        //dd($id);
        $doc = Disponibilidad::find($id);
        $doc->delete();
        return redirect()->route('doctor.hor')->with('success','Horario eliminado');
    }

}
