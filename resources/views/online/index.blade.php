@extends('template.layout')

@section('tittle')
    BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.
@endsection

@section('css')
<style>
    .especialidad, .ciudad{
        height: 45px;
        padding-left: 20px;
        margin-bottom:10px;
    }
@media (max-width: 1200px) {
  .especialidad {
    width:360px;
  }
  .ciudad {
    width:360px;
  }
  #custom-search-input input[type='submit'] {
    position: relative;
    width: 100px;
    height: 45px;
    top:0px;
    }
}

@media (max-width: 991px) {
  .especialidad {
    width:440px;
  }
  .ciudad {
    width:440px;
  }
  #custom-search-input input[type='submit'] {
    position: relative;
    width: 440px;
    height: 45px;
    top:0px;
    }
}

@media (max-width: 768px) {
  .especialidad {
    width:360px;
  }
  .ciudad {
    width:360px;
  }
  #custom-search-input input[type='submit'] {
    position: relative;
    width: 360px;
    height: 45px;
    top:0px;
    }
}

@media (max-width: 576px) {
  .especialidad {
    width:260px;
  }
  .ciudad {
    width:260px;
  }
  #custom-search-input input[type='submit'] {
    position: relative;
    width: 260px;
    height: 45px;
    top:0px;
    }
}

@media (max-width: 320px) {
  .especialidad {
    width:250px;
  }
  .ciudad {
    width:250px;
  }
  #custom-search-input input[type='submit'] {
    position: relative;
    width: 250px;
    height: 45px;
    top:0px;
    }
}

@media (max-width: 280px) {
  .especialidad {
    width:200px;
  }
  .ciudad {
    width:200px;
  }
  #custom-search-input input[type='submit'] {
    position: relative;
    width: 200px;
    height: 45px;
    top:0px;

    }
}

</style>

@endsection

@section('content')

	<!-- Hero -->
    <div class="hero_home version_1">
    	<div  id="reserva" class="content">
    		<h3>Busca un médico</h3>
    		<p>Selecciona una especialidad y ciudad donde te encuentras.</p>
			<form method="get" action="{{ route('buscar') }}">
	    			<div id="custom-search-input"> <!-- custom-search-input revisar mañana-->
        			<input name="specialty" type="text" class="tspecialty especialidad" placeholder="Especialidad">
        			<input name="city" type="text" class="tcity ciudad" placeholder="Ciudad" value="Trujillo">
					<input type="submit" class="buscar" value="Buscar">
		    	</div>
    		</form>
    	</div>
    </div>
    <!-- /Hero -->

    	<div id="funcionamiento" class="container margin_120_95">
    		<div class="main_title">
    			<h2>Reserva una <strong>cita</strong> en línea</h2>
    			<p>Encuentra un médico en tu ciudad, reservar una cita por Internet, te tomará solo unos minutos.</p>
    		</div>
    		<div class="row add_bottom_30">
    			<div class="col-lg-4">
    				<div class="box_feat" id="icon_1">
    					<span></span>
    					<h3>Busca un médico</h3>
    					<p>Te ayudamos a encontrar al especialista que necesitas, indica la ciudad en la que te encuentras. </p>
    				</div>
    			</div>
    			<div class="col-lg-4">
    				<div class="box_feat" id="icon_2">
    					<span></span>
    					<h3>Revisa su perfil</h3>
    					<p>Profesionales de la salud altamente preparados para brindarte la mejor atención.</p>
    				</div>
    			</div>
    			<div class="col-lg-4">
    				<div class="box_feat" id="icon_3">
    					<h3>Reserva una cita</h3>
    					<p>Nuestro compromiso es contactarte con el mejor especialista de tu ciudad.</p>
    				</div>
    			</div>
    		</div>
    		<!-- /row -->
		</div>

		<div class="bg_color_1">
			<div class="container">  <!-- margin_120_95 -->
				<div class="main_title">
					<h2>Médicos registrados</h2>
					<p>Forma parte de nuestro staff y aumenta tus atenciones.</p>
				</div>

				<div id="reccomended" class="owl-carousel owl-theme">
					@foreach($objects as $object)
					<div class="item">
						<a href="detail-page.html">
							<div class="title">
								{{-- <h4>Dr. Julia Holmes<em>Pediatrician - Cardiologist</em></h4> --}}
								<h4>Dr. {{ $object->nombres}} {{ $object->apellidos}}
								<em>{{ $object->especialidad->nombre}}</em>
								</h4>
							</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
						</a>
					</div>
					@endforeach
				</div>

				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
@endsection

@section('js')
	<script src="/assets/online/jQuery-Bootstrap-4-Typeahead-Plugin/bootstrap3-typeahead.js"></script>
	<script>
		var $specialty = $(".tspecialty") ;
		var $city = $(".tcity") ;

		$.get("/getspec", function(data){
  			$specialty.typeahead({ source:data,autoSelect:true});
		},'json');

		$.get("/getcity", function(data){
  			$city.typeahead({ source:data,autoSelect:true});
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
