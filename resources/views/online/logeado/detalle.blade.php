@extends('template.layoutlogeo')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('content')
<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		
		<div class="container margin_60">
			<div class="row">
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="http://via.placeholder.com/565x565.jpg" alt="" class="img-fluid">
						</figure>
						<small>Primary care - Internist</small>
						<h1>DR. Gustavo</h1>
						<span class="rating">
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star voted"></i>
							<i class="icon_star"></i>
							<small>(145)</small>
							<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
						</span>
						<ul class="statistic">
							<li>854 Views</li>
							<li>124 Patients</li>
						</ul>
						<ul class="contacts">
							<li><h6>Dirección</h6>Los Zafiros # 646 San Isidro</li>
							<li><h6>Teléfono</h6><a href="tel://000434323342">999-999-999</a></li>
						</ul>
						<div class="text-center"><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" class="btn_1 outline" target="_blank"><i class="icon_pin"></i>Ver en el mapa</a></div>
					</div>
				</aside>
				<!-- /asdide -->
				
				<div class="col-xl-9 col-lg-8">
					
					<div class="box_general_2 add_bottom_45">
						<div class="main_title_4">
							<h3><i class="icon_circle-slelected"></i>Selecciona tu fecha y hora</h3>
						</div>
						
						<div class="row add_bottom_45">
							<div class="col-lg-7">
								<div class="form-group">
									<div class="calendar"></div>
									<input type="hidden" id="my_hidden_input">
									<ul class="legend">
										<li><strong></strong>Disponible</li>
										<li><strong></strong>No disponible</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-5">
								<ul class="pac time_select version_2 add_top_20">
									<li>
										<input type="radio" id="radio1" name="radio_time" value="09.30am">
										<label for="radio1">09.30am</label>
									</li>
									<li>
										<input type="radio" id="radio2" name="radio_time" value="10.00am">
										<label for="radio2">10.00am</label>
									</li>
									<li>
										<input type="radio" id="radio3" name="radio_time" value="10.30am">
										<label for="radio3">10.30am</label>
									</li>
									<li>
										<input type="radio" id="radio4" name="radio_time" value="11.00am">
										<label for="radio4">11.00am</label>
									</li>
									<li>
										<input type="radio" id="radio5" name="radio_time" value="11.30am">
										<label for="radio5">11.30am</label>
									</li>
									<li>
										<input type="radio" id="radio6" name="radio_time" value="12.00am">
										<label for="radio6">12.00am</label>
									</li>
									<li>
										<input type="radio" id="radio7" name="radio_time" value="01.30pm">
										<label for="radio7">01.30pm</label>
									</li>
									<li>
										<input type="radio" id="radio8" name="radio_time" value="02.00pm">
										<label for="radio8">02.00pm</label>
									</li>
									<li>
										<input type="radio" id="radio9" name="radio_time" value="02.30pm">
										<label for="radio9">02.30pm</label>
									</li>
									<li>
										<input type="radio" id="radio10" name="radio_time" value="03.00pm">
										<label for="radio10">03.00pm</label>
									</li>
									<li>
										<input type="radio" id="radio11" name="radio_time" value="03.30pm">
										<label for="radio11">03.30pm</label>
									</li>
									<li>
										<input type="radio" id="radio12" name="radio_time" value="04.00pm">
										<label for="radio12">04.00pm</label>
									</li>
								</ul>
							</div>
						</div>
						<!-- /row -->
						
									
						<hr>
						<div class="text-center"><a href="booking-page.html" class="btn_1 medium">Reservar ahora</a></div>
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