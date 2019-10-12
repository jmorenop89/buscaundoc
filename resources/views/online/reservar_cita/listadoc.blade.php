@extends('template.layout')

@section('tittle')
		BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.

@endsection

@section('content')
<main class="theia-exception">
		<div id="results">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
					@if(count($doc))
					<h4>Mostrando {{ $doc->firstItem() }} - {{ $doc->lastItem() }} de {{ $doc->total() }}  Resultados</h4>
					@endif

					</div>
					<div class="col-md-6">
						<div class="search_bar_list">
							<input type="text" class="tspecialty form-control" placeholder="Especialidades....">
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
					@foreach($doc as $key)
					<div class="strip_list wow fadeIn">
						<a href="#0" class="wish_bt"></a>
						<figure>
							<a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>{{ $key->especialidad->nombre }}</small>
						<h3>{{ $key->nombres }} {{ $key->apellidos}}</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
						<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_4.svg" width="15" height="15" alt=""></a>
						<ul>
							<li><a href="#0" onclick="onHtmlClick('Doctors', 1)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Direcciones</a></li>
							<li><a href="/detalle">Reservar ahora</a></li>
						</ul>
					</div>
					@endforeach
					<!-- /strip_list -->
					@if(count($doc))
					{!! $doc->appends($data)->render() !!} 
					@endif
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
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="/online/js/markerclusterer.js"></script>
    <script src="/online/js/map_listing.js"></script>
	<script src="/online/js/infobox.js"></script>

	
	<script src="/assets/online/jQuery-Bootstrap-4-Typeahead-Plugin/bootstrap3-typeahead.js"></script>
	<script>
		var $specialty = $(".tspecialty") ;
					
		$.get("/getspec", function(data){
  			$specialty.typeahead({ source:data,autoSelect:true});
		},'json');
	
		
		$specialty.change(function() {
			var current = $specialty.typeahead("getActive");
			console.log(current); 
		  	if (current) {
		    	// Some item from your model is active!
		    	if (current.name == $specialty.val()) {
		      	// This means the exact match is found. Use toLowerCase() if you want case insensitive match.
		    	}else{
		      	// This means it is only a partial match, you can either add a new item
		      	// or take the active if you don't want new items
		    	}
			}else{
		    	// Nothing is active so it is a new value (or maybe empty value)
		  	}
		}); 

</script>



@endsection

