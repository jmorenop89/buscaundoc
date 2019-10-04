@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('css')
    <link href="/online/css/date_picker.css" rel="stylesheet">
@endsection

@section('content')

<div class="bg_color_2"><!--  bg_color_2 -->
	<div class="container pt-3"> <!-- margin_60_35 -->
		<!-- <div id="register"> -->
			
			<div class="row justify-content-center">
				<div class="col-md-6">
				<h2 class="text-center text-white">Registro de Paciente</h2>
					<form action="{{ route('reg-pac') }}" method="post" id="frm-validate">
						<input type="hidden" name="_token" value="{{ csrf_token()}}">
						<div class="box_form">
							<div class="form-group">
								<label>Nombres</label>
								<input type="text" class="form-control" placeholder="Ingresa tus nombres" name="nombres">
							</div>
							<div class="form-group">
								<label>Apellidos</label>
								<input type="text" class="form-control" placeholder="Ingresa tus apellidos" name="apellidos">
                            </div>
                            <div class="form-group">
								<label>Fecha de nacimiento</label>
								<input class="form-control" type="text" placeholder="Ingrese Fecha de Nacimiento" id="birthday" name="fecha_nac" data-lang="es">
							</div>
                            <div class="form-group">
								<label>Teléfono Celular</label>
								<input type="text" class="form-control" placeholder="Ingresa Nº Celular" name="celular">
							</div>
							<div class="form-group">
								<label>Correo</label>
								<input type="email" class="form-control" placeholder="Ingresa tu Correo" name="email">
							</div>
							<div class="form-group">
								<label>Contraseña</label>
								<input type="password" class="form-control" id="password1" placeholder="Ingresa contraseña" name="password">
							</div>
							<div class="form-group">
								<label>Confirmar contraseña</label>
								<input type="password" class="form-control" id="password2"  placeholder="Confirmar constraseña">
							</div>
							<div id="pass-info" class="clearfix"></div>
							<div class="checkbox-holder text-left">
								<div class="checkbox_2">
									<input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
									<label for="check_2"><span>Estoy de acuerdo con los <strong>terminos y condiciones</strong></span></label>
								</div>
							</div>
							<div class="form-group text-center add_top_30">
								<input class="btn_1" type="submit" value="Enviar">
							</div>
						</div>
						<p class="text-center">
							<small>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. 
								Eum no atqui putant democritum, velit nusquam sententiae vis no.
							</small>
						</p>
					</form>
				</div>
			</div>
			<!-- /row -->
		<!-- </div> -->
		<!-- /register -->
	</div>
</div>
@endsection

@section('js')
	<script src="/online/scripts/patient.js"></script>
@endsection