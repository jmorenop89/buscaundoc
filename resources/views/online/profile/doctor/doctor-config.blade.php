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
                      <a class="nav-link" href="{{route('doctor.cit')}}">Ver Citas</a>
                      <a class="nav-link active" href="{{route('doctor.conf')}}">Editar Perfil</a>
                    </div>
                </div>
            </aside>
            <!-- /asdide -->

            <div class="col-xl-9 col-lg-8">

                <div class="tabs_styled_2">
                    <!--/nav-tabs -->
                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane active" id="config" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="main_title_4">
                                        <h3><i class="icon_circle-slelected"></i>Configura tu cuenta
                                        </h3>
                                </div>
                                <hr>
                                <form action="{{ route('doctor.edit',$model->id)}}" method="post">
                                  @csrf                             <!--<div class="box_form">-->
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control"  placeholder="Ingresa tus nombres" name="nombres" value="{{ $model->nombres }}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control"  placeholder="Ingresa tus apellidos" name="apellidos" value="{{ $model->apellidos}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">

                                            <label>Codigo CMP</label>
                                            <input type="text" class="form-control"  placeholder="Ingresar CMP" name="cod_colegiatura" value="{{ $model->cod_colegiatura}}">

                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Direccion</label>
                                            <input type="text" class="form-control"  placeholder="Ingresa Direccion" name="direccion" value="{{ $model->direccion}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Fecha Nacimiento</label>
                                            <input type="text" class="form-control"  placeholder="Ingresa Fecha Nacimiento" value="{{ $model->fecha_nac}}">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Correo</label>
                                            <input type="email" class="form-control"  placeholder="Ingresa tu Correo" name="email" value="{{ $model->user->email}}">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Contraseña</label>
                                            <input type="password" class="form-control"  placeholder="Ingresa contraseña">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Confirmar contraseña</label>
                                            <input type="password" class="form-control"  placeholder="Confirmar contraseña">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group text-center add_top_30">
                                        <input class="btn_1" type="submit" value="Guardar">
                                    </div>
                                    <!--</div> -->
                                </form>
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
