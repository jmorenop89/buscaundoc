@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('content')
<main class="theia-exception">
		<div id="results">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h4><strong>Mostrando 10</strong> de 140 resultados</h4>
					</div>
					<div class="col-md-6">
						<div class="search_bar_list">
							<input type="text" class="typeahead form-control" placeholder="Especialidades....">
							<!-- form-control -->
							<input type="submit" value="Buscar">
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /results -->
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-7">

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatra</small>
						<h3>Dr. Gustavo</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Psicólogo</small>
						<h3>Dr. Jorge</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_2.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatra</small>
						<h3>Dr. Jean</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_3.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 2)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Pediatra</small>
						<h3>Dr. Fidel</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_4.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->

					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>Psicólogo</small>
						<h3>Dr. Eder</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_4.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					<!-- /strip_list -->
					
					<nav aria-label="" class="add_top_20">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Anterior</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Siguiente</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				
				<aside class="col-lg-5" id=""> <!-- id="sidebar"-->
					<div id="map_listing" class="normal_list">
					</div>
				</aside>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</main>
	<!-- /main -->

@endsection


@section('js')
	<script src="http://maps.googleapis.com/maps/api/js"></script >
	<script src="/online/js/markerclusterer.js"></script>
    <script src="/online/js/map_listing.js"></script>
	<script src="/online/js/infobox.js"></script>

	
	<script src="/online/jQuery-Bootstrap-4-Typeahead-Plugin/bootstrap3-typeahead.js"></script>
	<script>
		var $input = $(".typeahead") ;			    
			$input.typeahead({
		  source: [
			{id:"id1", name:"Ginecólogo"},
		{id:"id2", name:"Traumatólogo y Ortopedista"},
		{id:"id3", name:"Dermatólogo"},
		{id:"id4", name:"Pediatra"},
		{id:"id5", name:"Cirujano general"},
		{id:"id6", name:"Gastroenterólogo"},
		{id:"id7", name:"Urólogo"},
		{id:"id8", name:"Oftalmólogo"},
		{id:"id9", name:"Neurólogo"},
		{id:"id10", name:"Otorrino"},
		{id:"id11", name:"Psiquiatra"},
		{id:"id12", name:"Endocrinólogo"},
		{id:"id13", name:"Neumólogo"},
		{id:"id14", name:"Cardiólogo"},
		{id:"id15", name:"Neurocirujano"},
		{id:"id16", name:"Internista"},
		{id:"id17", name:"Psicólogo"},
		{id:"id18", name:"Reumatólogo"},
		{id:"id19", name:"Médico general"},
		{id:"id20", name:"Cirujano plástico"},
		{id:"id21", name:"Nefrólogo"},
		{id:"id22", name:"Cirujano cardiovascular y torácico"},
		{id:"id23", name:"Cirujano maxilofacial"},
		{id:"id24", name:"Oncólogo"},
		{id:"id25", name:"Hematólogo"},
		{id:"id26", name:"Nutricionista"},
		{id:"id27", name:"Especialista en Medicina Física y Rehabilitación"},
		{id:"id28", name:"Radiólogo"},
		{id:"id29", name:"Dentista"},
		{id:"id30", name:"Alergista"},
		{id:"id31", name:"Geriatra"},
		{id:"id32", name:"Cirujano pediátrico"},
		{id:"id33", name:"Infectólogo"},
		{id:"id34", name:"Anestesiólogo"},
		{id:"id35", name:"Neonatólogo"},
		{id:"id36", name:"Especialista en Medicina Intensiva"},
		{id:"id37", name:"Especialista en Emergencias"},
		{id:"id38", name:"Especialista en Administración de Salud"},
		{id:"id39", name:"Patólogo"},
		{id:"id40", name:"Patólogo clínico"},
		{id:"id41", name:"Neurofisiólogo clínico"},
		{id:"id42", name:"Médico familiar"},
		{id:"id43", name:"Genetista"},
		{id:"id44", name:"Cirujano vascular"},
		{id:"id45", name:"Epidemiólogo"},
		{id:"id46", name:"Médico del Deporte"},
		{id:"id47", name:"Terapeuta complementario"},
		{id:"id48", name:"Médico legal"},
		{id:"id49", name:"Homeópata"},
		{id:"id50", name:"Fisioterapeuta"},
		{id:"id51", name:"Bioquímico"},
		{id:"id52", name:"Especialista en Medicina Estética"},
		{id:"id53", name:"Médico del Trabajo"},
		{id:"id54", name:"Fonoaudiólogo"},
		{id:"id55", name:"Especialista en Medicina Nuclear"},
		{id:"id56", name:"Médico ocupacional"},
		{id:"id57", name:"Especialista en Medicina Natural"},
		{id:"id58", name:"Especialista en Salud Pública"},
		{id:"id59", name:"Farmacólogo"},
		{id:"id60", name:"Técnico en Laboratorio Clínico"},
		{id:"id61", name:"Podólogo"},
		{id:"id62", name:"Quiropráctico"},
		{id:"id63", name:"Enfermero"},
		{id:"id64", name:"óptico"}  ] , autoSelect: true
		}) ;


		$input.change(function() {
		  var current = $input.typeahead("getActive");
		  if (current) {
		    // Some item from your model is active!
		    if (current.name == $input.val()) {
		      // This means the exact match is found. Use toLowerCase() if you want case insensitive match.
		    } else {
		      // This means it is only a partial match, you can either add a new item
		      // or take the active if you don't want new items
		    }
		  } else {
		    // Nothing is active so it is a new value (or maybe empty value)
		  }
		}); 

</script>



@endsection

