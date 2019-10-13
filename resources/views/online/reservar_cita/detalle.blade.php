@extends('template.layout')

@section('tittle')
		BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.
@endsection

@section('css')
    <link href="/assets/online/css/date_picker.css" rel="stylesheet">
    <style>
    	@media(min-width: 320px){
    		ul.pac.time_select.version_2 li {
			width:50%;
			}
    	}
    	@media(min-width: 480px){
			ul.pac.time_select.version_2 li {
				width:33%;
			}
    	}
    	@media(min-width: 553px){
			ul.pac.time_select.version_2 li {
				width:25%;
			}
    	}
    	@media(min-width: 768px){
			ul.pac.time_select.version_2 li {
				width:20%;
			}
    	}
    	@media(min-width: 992px){
			ul.pac.time_select.version_2 li {
				width:50%;
			}
    	}
    </style>
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
				<aside class="col-xl-3 col-lg-4" id=""> <!-- id="sidebar"-->
					<div class="box_profile">
						<figure>
							<img src="http://via.placeholder.com/565x565.jpg" alt="" class="img-fluid">
						</figure>
						<small>Atencion Principal - {{$doc-> especialidad->nombre}}</small>
						<h1>{{ $doc-> nombres }} {{$doc-> apellidos}}</h1>
						<span> {{$doc-> ciudad->nombre}}</span>
						<ul class="contacts">
							<li><h6>Dirección</h6>{{ $doc-> direccion}}</li>
							<li><h6>Teléfono</h6><a href="tel://000434323342"></a></li>
						</ul>
						<div class="text-center"><a href="https://www.google.com/maps/place/" class="btn_1 outline" target="_blank"><i class="icon_pin"></i>Ver en el mapa</a></div>
					</div>
				</aside>
				<!-- /asdide -->

				<div class="col-xl-9 col-lg-8">

					<div class="box_general_2 add_bottom_45">
						<div class="main_title_4">
							<h3><i class="icon_circle-slelected"></i>Selecciona tu Fecha</h3>
						</div>

						<div class="row add_bottom_45">
							<div class="col-lg-12">
								<div class="row form-group">
									<div class="col-lg-3"></div>
									<div class="col-lg-6">
										<input class="calendar form-control" style="text-align:center; font-size:20px;" form="reserva_cita" name="fecha">
									   <input type="hidden" id="my_hidden_input" style="padding: inherit;">
									</div>
									<div class="col-lg-3"></div>
								</div>
							</div>
							<div class="col-lg-12">
                                <div class="main_title_4">
                                    <h3><i class="icon_circle-slelected"></i>Selecciona tu Hora</h3>
                                </div>
								<ul class="pac time_select version_2 doc add_top_20" id="listar_horarios" class="justify-content-center">
									<li v-for="(h , index) of horas">
										<input type="radio" :id="'radio'+index" name="radio_time[]" :value="h" form="reserva_cita">
										<label :for="'radio'+index">@{{h}}</label>
									</li>
								</ul>
                                <form action="{{route('probar', Auth::user()->id)}}" method="post" id="reserva_cita" hidden>
                                    @csrf
                                </form>
							</div>
						</div>
						<!-- /row -->


						<hr>
						<div class="text-center"><input type="submit" class="btn_1 medium" value="Reservar Cita" form="reserva_cita">
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

@section('js')
	<script src="/assets/online/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

     <script>
		$(document).ready(function(){
			var dd = $('.calendar').datepicker({
			    todayHighlight: true,
				daysOfWeekDisabled: [0],
				weekStart: 1,
				format: "yyyy-mm-dd",
                startDate:new Date(),
                autoclose:true,
			}).on('changeDate', function(e) {
				console.log(e.date);
				console.log(e.format('yyyy-mm-dd'));
        		// `e` here contains the extra attributes
    		});
    	});
	</script>
    <script>
        $hora = [];
        $contador = 1;
        $(document).ready(function(){
            $('.calendar').datepicker({}).on('changeDate',function(e){
                $di = @json($dis);
                // console.log(@json($dis));
                for (var i = 0;i < $di.length; i++) {

                    if($('.calendar').val() === $di[i].fecha){
                        if ($contador === 1) {
                        //console.log($contador);
                        $hora = $di[i].hora;
                        $contador++;
                        }
                    }
                }
                if (! $hora.length == 0) {
                console.log($hora);
                console.log(app.horas = $hora);
                console.log(app.horas);

                }
            })
        })
        var app = new Vue({
          el: '#listar_horarios',
          data: {
            horas:[],
          }
        })
    </script>
@endsection
