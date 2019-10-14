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
                    @else
                    <h4>Lo sentimos no encontramos registros</h4>
					@endif

					</div>
					<div class="col-md-6">
						<div class="search_bar_list">
							<input type="text" class="tspecialty form-control" placeholder="Especialidades...." name="specialty" form="espes">
							<!-- form-control -->
							<input type="submit" value="Buscar" form="espes">
						</div>
                        <form method="get" action="{{ route('buscar') }}" hidden id="espes">
                            <input name="city" type="text" class="tcity ciudad" placeholder="Ciudad" value="Trujillo">
                        </form>
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
                    @if(count($doc))
					@foreach($doc as $key)
					<div class="strip_list wow fadeIn">
						<a class="wish_bt"></a>
						<figure>
							<a><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
						</figure>
						<small>{{ $key->especialidad->nombre }}</small>
						<h3>{{ $key->nombres }} {{ $key->apellidos}}</h3>
						<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
						<ul>
							<li><a onclick="onHtmlClick('Doctors', 1)" class="btn_listing">Ver en el Mapa</a></li>
							<li><a href="https://www.google.com/maps/place/" target="_blank">Direcciones</a></li>
							<li><a href="{{ route ('detalle',$key->id)}}">Reservar ahora</a></li>
						</ul>
					</div>
					@endforeach
                    @else
                    <div class="strip_list wow fadeIn">
                        <h3>Lo sentimos no hay resultados</h3>
                    </div>
					<!-- /strip_list -->
                    @endif
                    @if(count($doc))
					{!! $doc->appends($data)->render() !!}
					@endif
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
	<script src="/assets/online/js/markerclusterer.js"></script>
    <script src="/assets/online/js/map_listing.js"></script>
	<script src="/assets/online/js/infobox.js"></script>


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

