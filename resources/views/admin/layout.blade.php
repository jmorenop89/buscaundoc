@extends('template.layout')

@section('tittle')
        BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.
@endsection

@section('content')
			<!-- start page content -->
            <div class="page-content-wrapper">
                <div class="page-content">

                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="card card-box">
                                <div class="card-head">
                                    <header>LOG IN</header>
                                     <button id = "panel-button"
				                           class = "mdl-button mdl-js-button mdl-button--icon pull-right"
				                           data-upgraded = ",MaterialButton">
				                           <i class = "material-icons">Iniciar Sesion</i>
				                        </button>
                                </div>
                                <div class="card-body " id="bar-parent">
                                    <form>
                                        <div class="form-group">
                                            <label for="simpleFormEmail">Correo Email</label>
                                            <input type="email" class="form-control" id="simpleFormEmail" placeholder="Ingresa tu Correo">
                                        </div>
                                        <div class="form-group">
                                            <label for="simpleFormPassword">Contraseña</label>
                                            <input type="password" class="form-control" id="simpleFormPassword" placeholder="Ingresa tu Contraseña">
                                        </div>

                                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page content -->
            @endsection
