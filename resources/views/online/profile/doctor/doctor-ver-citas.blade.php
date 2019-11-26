@extends('template.layout')

@section('tittle')
        BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.
@endsection

@section('css')
    <link href="/assets/online/css/date_picker.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/online/assets/profile-doctor.css">
    <link rel="stylesheet" href="/assets/plugins/croppic/croppic.css">
@endsection

@section('content')
<section>

    <div id="breadcrumb">
        <div class="position-relative">
            <div class="ml-5">
            <ul>
                <li><a href="{{route('inicio')}}">Inicio</a></li>
                <li>Perfil</li>
            </ul>
        </div>
        @if($message = Session::get('success'))
            <div class="alert alert-success alert-block alert-dismissible fade show" role="alert">
                {{ $message }}
            <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        @endif
        @if($message = Session::get('error'))
            <div class="alert alert-danger alert-block alert-dismissible fade show" role="alert">
                {{ $message }}
            <button type="button" class="close" data-dismiss="alert">×</button>
            </div>
        @endif
        </div>
    </div>
    <!-- /breadcrumb -->

    <div class="container margin_60">
        <div class="row">

            <aside class="col-xl-3 col-lg-4" id=""> <!--id="sidebar"-->
                <div class="box_profile">
                    <figure>
                        <div class="croppic" style="width: 250px;height: 250px;margin:0px"
                            id="cropImgProfile"
                            data-model="{{ $model->id }}"
                            data-id="{{ $model->id }}"
                            data-image="{{ $model->imagen?true:false }}"
                            data-width="500"
                            data-placement="bottom">
                            @if($model->imagen)
                                <img src="/{{ config('app.dir_image').$model->imagen }}" class="croppedImg">
                            @endif
                        </div>
                    </figure>

                    <small>{{$model-> especialidad->nombre}}</small>
                    <h1>Dr. {{ $model->nombres }} {{ $model->apellidos }}</h1>
                    <span>{{$model-> ciudad->nombre}}</span>


                    <hr>
                    <div class="nav text-justify nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <a class="nav-link" href="{{route('profile')}}">Agregar Horarios</a>
                      <a class="nav-link" href="{{route('doctor.hor')}}">Ver Horarios</a>
                      <a class="nav-link active" href="{{route('doctor.cit')}}">Ver Citas</a>
                      <a class="nav-link" href="{{route('doctor.conf')}}">Editar Perfil</a>
                    </div>
                </div>
            </aside>
            <!-- /asdide -->

            <div class="col-xl-9 col-lg-8">

                <div class="tabs_styled_2">
                    <!--/nav-tabs -->
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane active" id="ver-citas" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="main_title_4">
                                    <h3><i class="icon_circle-slelected"></i>Ver cita de pacientes</h3>
                                </div>
                                <hr>
                                <div class="doc_citas">
                                    <input type="text" placeholder="filtrar">
                                    <table class="table">
                                        <thead class="thead-primary">
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Apellidos</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Celular</th>
                                            <th scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($citas)
                                            @foreach($citas as $key=>$cita)
                                            <tr>
                                                <th value="{{$loop->iteration}}">{{$loop->iteration}}</th>
                                                <td value="{{$cita->paciente->nombres}}">{{$cita->paciente->nombres}}</td>
                                                <td value="{{$cita->paciente->apellidos}}">{{$cita->paciente->apellidos}}</td>
                                                <td value="{{$cita->paciente->user->email}}">{{$cita->paciente->user->email}}</td>
                                                <td value="{{$cita->paciente->celular}}">{{$cita->paciente->celular}}</td>
                                                <td><span data-toggle="modal" data-target="#deta{{$key}}" class="detail"><i class="fas fa-eye"></i></span></td>
                                            </tr>
                                            @endforeach
                                                @each('online.profile.doctor.detail-cita',$citas,'cita')
                                            @else
                                            <tr>
                                                <th colspan="6" class="text-center">No hay citas registradas aún</th>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    <!-- /tab-content -->
                </div>
                <!-- /tabs_styled -->
            </div>
            <!-- /col -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</section>
<!-- /main -->
@endsection

@section('js')
    <script src="/assets/plugins/croppic/croppic.min.js"></script>
    <script src="/assets/online/scripts/croppic.js"></script>
    <script src="/assets/online/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        fn_croppic('cropImgProfile', "{{ route('profile.image.store') }}", "{{ route('profile.image.delete') }}");
    </script>
@endsection
