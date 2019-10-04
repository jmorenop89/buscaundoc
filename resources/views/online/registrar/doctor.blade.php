@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('css')
    <link href="/online/css/date_picker.css" rel="stylesheet">
@endsection

@section('content')

<div id="hero_register">

	<div class="container pt-3"> <!-- margin_120_95 -->
		<div class="row">
			<div class="col-3"></div>

			<div class="col-6"> <!-- cambie el valor 5 , ml-auto    col-lg-5-->
			<h2 class="text-center text-white">Registro de Médico</h2>
				<div class="box_form">
					<div id="message-register"></div>
					<form method="post" action="{{ route('reg-doc') }}">
						<input type="hidden" name="_token" value="{{ csrf_token()}}">
						<div class="row">
							<div class="col-md-6 ">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Nombres" name="nombres" id="name_register">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Apellidos" name="apellidos" id="lastname_register">
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									 <select class="form-control" name="especialidad_id" id="country_register">
                                        @foreach($espe as $espes)
				                            <option value="{{ $espes->id }}" >{{$espes->nombre}}</option>
				                        @endforeach
									</select>
								</div>
							</div>
							<div class="col-md-6">
                                <div class="form-group">
                                    <select class="form-control" name="ciudad_id" id="country_register">
                                        @foreach($ciud as $ciuds)
				                            <option value="{{ $ciuds->id }}" >{{$ciuds->nombre}}</option>
				                        @endforeach
									</select>
								</div>
							</div>
						</div>
						<!-- /row -->
						<div class="row">
                            <div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Fecha de Nacimiento" name="fecha_nac" id="mobile_register">
								</div>
							</div>
                            <div class="col-md-6">
								<div class="form-group">
									<input type="text" id="verify_register" class="form-control" placeholder="CMP" name="cod_colegiatura">
								</div>
                            </div>
						</div>
						<!-- /row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Dirección" name="direccion" id="address_register">
								</div>
							</div>
						</div>
						
                        <!-- /row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo" name="email" id="email_register">
                                </div>
                            </div>
						</div>
						<!-- /row -->
                        <div class="row">
                            <div class="col-lg-12">
								<div class="form-group">									
									<input type="password" class="form-control" id="password1" name="password" placeholder="Ingresa contraseña">
								</div>
                            </div>
						</div>
						<!-- /row -->
                        <div class="row">
                            <div class="col-lg-12">
								<div class="form-group">									
									<input type="password" class="form-control" id="" name="password2" placeholder="Confirmar constraseña">
								</div>
                            </div>
						</div>
						<!-- /row -->
						<div><input type="submit" class="btn_1" value="Enviar" id="submit-register"></div>
					</form>
				</div>
				<!-- /box_form -->
			</div>
			<!-- /col -->
			<div class="col-3"></div>	
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /hero_register -->

<script src="online/js/bootstrap-datepicker.js"></script>
    <script>
			$('#calendar').datepicker({
			    todayHighlight: true,
				daysOfWeekDisabled: [0],
				weekStart: 1,
			    format: "yyyy-mm-dd",
    			datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
			});
	</script>
@endsection
