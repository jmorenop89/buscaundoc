@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('content')
<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Categoria</a></li>
					<li>Pagina Activa</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="https://s3-sa-east-1.amazonaws.com/doctoralia.pe/doctor/36dfef/36dfefd0f71a92491b199b7f679379d6_large.jpg" alt="" class="img-fluid">
						</figure>
						<small>Nombres y Apellidos Paciente</small>
						<h1>Richard Butron</h1>
						<ul class="statistic">
							<li>20 Visitas</li>
							<li>12 Atenciones</li>
						</ul>
						<ul class="contacts">
                            <li><h6>celular</h6><a href="tel://000434323342">666-666-666</a></li>
                            <li><h6>Correo</h6>gustavosebastiani@gmail.com</li>
						</ul>
						<div class="text-center"><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" class="btn_1 outline" target="_blank"><i class="icon_pin"></i>Ver en el mapa</a></div>
					</div>
				</aside>
				<!-- /asdide -->

				<div class="col-xl-9 col-lg-8">

					<div class="box_general_2 add_bottom_45">
						<div class="main_title_4">
							<h3><i class="icon_circle-slelected"></i>Fecha y Hora</h3>
						</div>

						<div class="row add_bottom_45">
							<div class="col-lg-7">
								<div class="form-group">
									<div id="calendar"></div>
									<input type="hidden" id="my_hidden_input">

								</div>
							</div>
							<div class="col-lg-5">
								<ul class="time_select version_2 add_top_20">


										<input type="radio" id="radio1" name="radio_time" value="11.00am">
										<label for="radio1">Dr. Gustavo</label>
									</li>

									<li>
										<input type="radio" id="radio2" name="radio_time" value="12.00am">
										<label for="radio2">Hora: 12.00 am</label>
									</li>

								</ul>
							</div>
						</div>
						<!-- /row -->


						<hr>
						<div class="text-center"><a href="booking-page.html" class="btn_1 medium">Citas Reservadas</a></div>
					</div>
					<!-- /box_general -->


				</div>
				<!-- /col -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->
@endsection
