@extends('template.layout')

@section('tittle')
    BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.
@endsection

@section('css')
    <link href="/assets/online/css/date_picker.css" rel="stylesheet">
@endsection

@section('content')

<div class="bg_color_2">
	<div class="container pt-3"> <!-- margin_120_95 -->
		<div class="row justify-content-center">
			<div class="col-md-6"> <!-- cambie el valor 5 , ml-auto    col-lg-5-->
			<h2 class="text-center text-white">Registrate como Médico</h2>
					<form method="post" action="{{ route('reg-doc') }}" id="frm-doctor-vld">
						<input type="hidden" name="_token" value="{{ csrf_token()}}">
						<div class="box_form">
							<div class="form-group">
								<label>Nombres</label>
								<input type="text" class="form-control" placeholder="Ingresar Nombres" name="nombres" id="name_register" value="{{ old('nombres') }}">
							</div>
							<div class="form-group">
								<label>Apellidos</label>
								<input type="text" class="form-control" placeholder="Ingresar Apellidos" name="apellidos" id="lastname_register" value="{{ old('apellidos') }}">
							</div>
							<div class="row">
								<div class="form-group col-md-6">
									<label>Especialidad</label>
									 <select class="form-control" name="especialidad_id" id="country_register">
									 	<option disabled selected >Seleccionar una especialidad</option>
		                                @foreach($espe as $espes)
				                            <option value="{{ $espes->id }}" >{{$espes->nombre}}</option>
				                        @endforeach
									</select>
								</div>
		                        <div class="form-group col-md-6">
		                        	<label>Ciudad</label>
		                            <select class="form-control" name="ciudad_id" id="country_register">
                                        <option disabled selected >Seleccionar una ciudad</option>
		                                @foreach($ciud as $ciuds)
				                            <option value="{{ $ciuds->id }}" >{{$ciuds->nombre}}</option>
				                        @endforeach
									</select>
								</div>
							</div>
							<div class="form-group">
								<label>Fecha de Nacimiento</label>
								<input type="text" class="form-control" placeholder="Ingresar Fecha de Nacimiento" name="fecha_nac" id="fecha" data-lang="es" value="{{ old('fecha_nac') }}">
							</div>
							<div class="form-group">
								<label>Codigo de Colegiatura</label>
								<input type="text" id="verify_register" class="form-control" placeholder="Ingresar CMP" name="cod_colegiatura">
							</div>
							<div class="form-group">
								<label>Direccion</label>
								<input type="text" class="form-control" placeholder="Ingresar Dirección" name="direccion" id="address_register">
                            </div>
                            <div class="form-group">
								<label>Teléfono Celular</label>
								<input type="text" class="form-control" placeholder="Ingresar Número" name="celular" value="{{ old('celular') }}">
							</div>
	                        <div class="form-group">
	                        	<label>Correo Electronico</label>
	                            <input type="email" class="form-control" placeholder="Ingresar Correo" name="email" id="email_register" value="{{ old('email') }}">
	                        </div>
							<div class="form-group">
								<label>Contraseña</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Ingresar contraseña">
							</div>
							<div class="form-group">
								<label>Verificar contraseña</label>
								<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmar constraseña">
							</div>
							<div id="pass-info" class="clearfix"></div>
							<div class="checkbox-holder text-left">
								<div class="checkbox_2">
									<label for="check_2"><span>Estoy de acuerdo con los <strong>terminos y condiciones</strong></span></label>
									<input type="checkbox" id="agree" name="agree">
								</div>
							</div>
							<div class="form-group text-center add_top_30">
								<input type="submit" class="btn_1" value="Enviar" id="submit-register">
							</div>
						</div>
						<!-- <p class="text-center">
							<small>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet.
								Eum no atqui putant democritum, velit nusquam sententiae vis no.
							</small>
						</p> -->
					</form>
				</div>
				<!-- /box_form -->
			</div>
			<!-- /col -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->

@endsection

@section('js')
	<script src="/assets/online/js/bootstrap-datepicker.js"></script>
	<script src="/assets/online/scripts/doctor.js"></script>
@endsection
