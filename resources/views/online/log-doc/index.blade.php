@extends('template.layout')

@section('tittle')
    BUSCAUNDOC - Find easily a doctor and book online an appointment
@endsection

@section('css')
	<style>
		.croppic img{
			width: 100%;
		}
	</style>
	<link href="/assets/online/css/date_picker.css" rel="stylesheet">
	<style>
		/* Menù */
		@media (max-width: 2560px) {
			.nav-pills .nav-link {
				width:100%;
				text-align: center;   
			}
		}

		@media (max-width: 1200px) {
			.nav-pills .nav-link {
				width:100%;
				text-align: center;   
			}
		}

		@media (max-width: 992px) {
			.nav-pills .nav-link {
				width:100%;
				text-align: center;   
			}
		}

		@media (max-width: 991px) {
			.nav-pills .nav-link {
				width:50%;
				text-align: center;   
			}
			.box_profile figure{
				margin:10px auto;
			}
		}

		@media (max-width: 768px) {
			.nav-pills .nav-link {
				width:50%;
				text-align: center;   
			}
			.container{
				max-width: 540px
			}
			ul.doc.time_select.version_2 li {
				width:25%;
			}
		}

		@media (max-width: 576px) {
			.nav-pills .nav-link {
				width:50%;
				text-align: center;   
			}

		}
		@media (max-width: 480px) {
			ul.doc.time_select.version_2 li {
				width: 33%;
		  	}
		}

		@media (max-width: 320px) {
			.nav-pills .nav-link {
				width:100%;
				text-align: center;   
			}
			.doc_citas {
				overflow-x:scroll;
			}
			ul.doc.time_select.version_2 li {
			    width:50%;
			}
		}
	</style>
	<link rel="stylesheet" href="/assets/plugins/croppic/croppic.css">
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
						
						<small>Primary care - Internist</small>
						<h1>DR. Julia Jhones</h1>
						
						<hr>
					    <div class="nav text-justify nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#agregar-ho" role="tab" aria-controls="v-pills-home" aria-selected="true">Agregar Horarios</a>
					      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#eliminar-ho" role="tab" aria-controls="v-pills-profile" aria-selected="false">Eliminar Horarios</a>
					      <a class="nav-link" id="" data-toggle="pill" href="#ver-citas" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ver Citas</a>
					      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#config" role="tab" aria-controls="v-pills-messages" aria-selected="false">Configuración</a>
					    </div>
					</div>
				</aside>
				<!-- /asdide -->
				
				<div class="col-xl-9 col-lg-8">

					<div class="tabs_styled_2">
						<!--/nav-tabs -->
							    <div class="tab-content" id="v-pills-tabContent">

							      <div class="tab-pane fade show active" id="agregar-ho" role="tabpanel" aria-labelledby="v-pills-home-tab">
								  	<div class="main_title_4">
										<h3><i class="icon_circle-slelected"></i>Selecciona fecha para agregar horarios</h3>
									</div>
							      	<hr>
									<div class="row add_bottom_45">
										<div class="col-lg-7">
											<div class="form-group">
												<div class="calendar"></div>
												<input type="hidden" id="my_hidden_input">
											</div>
										</div>
										<div class="col-lg-5 ">											
											<form>
												<div class="form-row">
													<div class="form-group col-md-6">
														<label>Hora Inico</label>
														<input type="text" class="form-control" id="" placeholder="Hora inicio">
													</div>
													<div class="form-group col-md-6">
														<label>Hora Fin</label>
														<input type="text" class="form-control" id="" placeholder="Hora fin">
													</div>													
													<div class="form-group col-6">
														<label>Intervalo</label>
														<input type="text" class="form-control" id="" placeholder="Intervalo">
													</div>																									</div>
												<div class="text-center"><a href="booking-page.html" class="btn_1 medium">Guardar</a></div>	
												
											</form>
										</div>
										<div class="col-lg-12">
											<ul class="doc time_select version_2 doc add_top_20 text-center">
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
													<input type="radio" id="radio5" name="radio_time" value="09.30am">
													<label for="radio5">11.30am</label>
												</li>
												<li>
													<input type="radio" id="radio6" name="radio_time" value="10.00am">
													<label for="radio6">12.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio7" name="radio_time" value="10.30am">
													<label for="radio7">12.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio8" name="radio_time" value="11.00am">
													<label for="radio8">13.00am</label>
												</li>
												<li>
													<input type="radio" id="radio9" name="radio_time" value="10.30am">
													<label for="radio9">13.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio10" name="radio_time" value="11.00am">
													<label for="radio10">14.00am</label>
												</li>
											</ul>
										</div>
									</div>
								  </div>

							      <div class="tab-pane fade" id="eliminar-ho" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							      <div class="main_title_4">
										<h3><i class="icon_circle-slelected"></i>Selecciona fecha para eliminar horarios
								  </div>
							      <hr>
								  <div class="row add_bottom_45">
										<div class="col-lg-12">
											<div class="form-group">
												<div class="calendar"></div>
												<input type="hidden" id="my_hidden_input">
											</div>
										</div>
										
										<div class="col-lg-12">
											<ul class="doc time_select version_2 add_top_20 text-center">
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
													<input type="radio" id="radio1" name="radio_time" value="09.30am">
													<label for="radio1">11.30am</label>
												</li>
												<li>
													<input type="radio" id="radio2" name="radio_time" value="10.00am">
													<label for="radio2">12.00pm</label>
												</li>
												<li>
													<input type="radio" id="radio3" name="radio_time" value="10.30am">
													<label for="radio3">12.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio4" name="radio_time" value="11.00am">
													<label for="radio4">13.00am</label>
												</li>
												<li>
													<input type="radio" id="radio3" name="radio_time" value="10.30am">
													<label for="radio3">13.30pm</label>
												</li>
												<li>
													<input type="radio" id="radio4" name="radio_time" value="11.00am">
													<label for="radio4">14.00am</label>
												</li>
											</ul>
										</div>
									</div>
									<hr>
								<div class="text-center"><a href="booking-page.html" class="btn_1 medium">Eliminar</a></div>
							  	  </div>

							      <div class="tab-pane fade" id="ver-citas" role="tabpanel" aria-labelledby="v-pills-messages-tab">
								 	 <div class="main_title_4">
										<h3><i class="icon_circle-slelected"></i>Ver cita de pacientes</h3>
									</div>
									  <hr>
									  <div class="doc_citas">
									  <table class="table">
											<thead class="thead-primary">
												<tr>
												<th scope="col">#</th>
												<th scope="col">Nombres</th>
												<th scope="col">Apellidos</th>
												<th scope="col">Sexo</th>
												<th scope="col">Edad</th>
												</tr>
											</thead>
											<tbody>
												<tr>
												<th scope="row">1</th>
												<td>Manuel</td>
												<td>Campos</td>
												<td>M</td>
												<td>30</td>
												</tr>
												<tr>
												<th scope="row">2</th>
												<td>Carlos</td>
												<td>Malpartida</td>
												<td>M</td>
												<td>45</td>
												</tr>
												<tr>
												<th scope="row">3</th>
												<td>Maribel</td>
												<td>Terrones</td>
												<td>F</td>
												<td>20</td>
												</tr>
											</tbody>
										</table>
										</div>
							      	<!-- <div class="strip_list wow fadeIn">
										<a href="#0" class="wish_bt"></a>
										<figure>
											<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
										</figure>
										<small>Pediatrician</small>
										<h3>Dr. Cornfield</h3>
										<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
										<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
										<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
										<ul>
											<li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
											<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
											<li><a href="detail-page.html">Book now</a></li>
										</ul>
									</div> -->
							      </div>

							      <div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="v-pills-messages-tab">
									<div class="main_title_4">
											<h3><i class="icon_circle-slelected"></i>Configura tu cuenta
									</div>
							      	<hr>
							      	<form>
										<!--<div class="box_form">-->
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Nombres</label>
													<input type="text" class="form-control" id="" placeholder="Ingresa tus nombres">
												</div>
												<div class="form-group col-md-6">
													<label>Apellidos</label>
													<input type="text" class="form-control" id="" placeholder="Ingresa tus apellidos">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Sexo</label>
													<input type="text" class="form-control" id="" placeholder="Sexo">
												</div>
												<div class="form-group col-md-6">
													<label>Edad</label>
													<input type="text" class="form-control" id="" placeholder="Ingresa tus edad">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Telefono Celular</label>
													<input type="text" class="form-control" id="" placeholder="Ingresa Nº Celular">
												</div>
												<div class="form-group col-md-6">
													<label>Correo</label>
													<input type="email" class="form-control" id="" placeholder="Ingresa tu Correo">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Contraseña</label>
													<input type="password" class="form-control" id="" placeholder="Ingresa contraseña">
												</div>
												<div class="form-group col-md-6">
													<label>Confirmar contraseña</label>
													<input type="password" class="form-control" id="" placeholder="Confirmar contraseña">
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
	</main>
	<!-- /main -->
	
@endsection

@section('js')
	<script src="/assets/plugins/croppic/croppic.min.js"></script>
	<script src="/assets/online/scripts/croppic.js"></script>
	<script src="/assets/online/js/bootstrap-datepicker.js"></script>
    <script>
		$(document).ready(function(){
			var dd = $('.calendar').datepicker({
			    todayHighlight: true,
				daysOfWeekDisabled: [0],
				weekStart: 1,
				format: "yyyy-mm-dd",
				datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
			}).on('changeDate', function(e) {
				console.log(e.date);
				console.log(e.format('yyyy-mm-dd'));
        		// `e` here contains the extra attributes
    		});
    	});
	</script>
	<script>
		fn_croppic('cropImgProfile', '/profile/save-image', '/profile/delete-image');
	</script>
@endsection
