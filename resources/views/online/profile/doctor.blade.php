@extends('template.layout')

@section('tittle')
		BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.
@endsection

@section('css')
	<style>
		.croppic img{
			width: 100%;
		}
	</style>
	<link href="/assets/online/css/date_picker.css" rel="stylesheet">
	<style>
        /* Alerta */
        div[role=alert]{
            position: absolute;
            right: -90px;
            top: -114px;
        }
        /* Enviar horarios*/
        #enviar_ho{
            margin: 0 auto;
            display: block;
            margin-top: 15px;
        }
        #horas li input[type="text"]{
            display: none;
        }
		/* Menù */
		@media (max-width: 2560px) {
			.nav-pills .nav-link {
				width:100%;
				text-align: center;
			}
			.celda {
                vertical-align:top;
                display: inline-grid;
                background:#F8F8F8;
                border: 2px solid #fff;
            }
            .celda th, .celda td{
                width: 150px;
                display: list-item;
            }
            .celda td{
                text-align: center;
            }
            .table-responsive{
                width: auto;
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
			/*.celda {
				vertical-align:middle;
			}*/
		}

		@media (max-width: 991px) {
			.nav-pills .nav-link {
				width:50%;
				text-align: center;
			}
			.box_profile figure{
				margin:10px auto;
			}
			/*.celda {
				vertical-align:middle;
			}*/
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
			/*.celda {
				vertical-align:middle;
			}*/
		}

		@media (max-width: 576px) {
			.nav-pills .nav-link {
				width:50%;
				text-align: center;
			}
			/*.celda {
				vertical-align:middle;
			}*/
		}
		@media (max-width: 480px) {
			ul.doc.time_select.version_2 li {
				width: 33%;
		  	}
			/*.letra .celda {
				padding: 0.3rem;
				font-size:12px;
				vertical-align:middle;
			}*/
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

		.vertical {
			height: 400px;
            overflow: auto;
            display: flow-root;
		}
        #horarios{
            display: flexbox;
        }
        #horarios > tbody{
            display: inline-flex;
        }
        /*scrollbar*/
        #horarios::-webkit-scrollbar {
            width: 8px;     /* Tamaño del scroll en vertical */
            height: 5px;    /* Tamaño del scroll en horizontal */
           /* display: none;*/  /* Ocultar scroll */
        }
        #d-d::-webkit-scrollbar {
            width: 8px;     /* Tamaño del scroll en vertical */
            height: 5px;    /* Tamaño del scroll en horizontal */
           /* display: none;*/  /* Ocultar scroll */
        }
        /* Ponemos un color de fondo y redondeamos las esquinas del thumb */
        #horarios::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 4px;
        }
        #d-d::-webkit-scrollbar-thumb {
            background: #ccc;
            border-radius: 4px;
        }

        /* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
        #horarios::-webkit-scrollbar-thumb:hover {
            background: #b3b3b3;
            box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
        }
        #d-d::-webkit-scrollbar-thumb:hover {
            background: #b3b3b3;
            box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
        }

        /* Cambiamos el fondo cuando esté en active */
        #horarios::-webkit-scrollbar-thumb:active {
            background-color: #999999;
        }
        #d-d::-webkit-scrollbar-thumb:active {
            background-color: #999999;
        }
        /* Ponemos un color de fondo y redondeamos las esquinas del track */
        #horarios::-webkit-scrollbar-track {
            background: #e1e1e1;
            border-radius: 4px;
        }
        #d-d::-webkit-scrollbar-track {
            background: #e1e1e1;
            border-radius: 4px;
        }

        /* Cambiamos el fondo cuando esté en active o hover */
        #horarios::-webkit-scrollbar-track:hover,
        #horarios::-webkit-scrollbar-track:active {
          background: #d4d4d4;
        }
        #d-d::-webkit-scrollbar-track:hover,
        #d-d::-webkit-scrollbar-track:active {
          background: #d4d4d4;
        }
        #mas{
            color: green;
            padding: 0;
        }
        #equis{
            color: red;
            padding: 0;
        }

	</style>
	<link rel="stylesheet" href="/assets/plugins/croppic/croppic.css">
@endsection

@section('content')

	<main>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="/">Inicio</a></li>
					<li>Doctor</li>
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

						<small>{{$model-> especialidad->nombre}}</small>
						<h1>Dr. {{ $model->nombres }} {{ $model->apellidos }}</h1>
						<span>{{$model-> ciudad->nombre}}</span>


						<hr>
					    <div class="nav text-justify nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#agregar-ho" role="tab" aria-controls="v-pills-home" aria-selected="true">Agregar Horarios</a>
					      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#eliminar-ho" role="tab" aria-controls="v-pills-profile" aria-selected="false">Ver Horarios</a>
					      <a class="nav-link" id="" data-toggle="pill" href="#ver-citas" role="tab" aria-controls="v-pills-messages" aria-selected="false">Ver Citas</a>
					      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#config" role="tab" aria-controls="v-pills-messages" aria-selected="false">Editar Perfil</a>
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
												<div class="form-row">
													<div class="form-group col-md-6">
														<label>Hora Inico</label>

														<input type="time" class="form-control" id="hora_i">


													</div>
													<div class="form-group col-md-6">
														<label>Hora Fin</label>
														<input type="time" class="form-control" id="hora_f">
													</div>
													<div class="form-group col-6">
														<label>Intervalo</label>
														<input type="time" valueAsNumber class="form-control" id="inter">
													</div>
												</div>
												<div class="text-center" id="crear"><div class="btn_1 small">Crear Horarios</div></div>
										</div>
										<div class="col-lg-12">
											<ul class="doc time_select version_2 doc add_top_20 text-center" id="horas">
                                                <li v-for="horai of horas">
                                                    <input type="text" name="hora[]" :id="horai.name" form="hor_doc" v-model="horai.hora">
                                                    <label :for=horai.name>@{{horai.hora}}</label>
                                                </li>
											</ul>
										</div>
                                        <div class="col-lg-12 text-right">
                                            <input type="text"  id="fecha" name="fecha" v-model="fec" hidden form="hor_doc">
                                            <input type="submit" id="enviar_ho"class="btn_1 medium"value="Guardar Horarios" form="hor_doc">
                                        </div>
                                        <form action="{{route('horarios',$model->id)}}" method="post" id="hor_doc" hidden>
                                            @csrf
                                        </form>
                                        @if (session('status'))
                                        <div class="alert alert-primary" role="alert">
                                        {{ session('status') }}
                                        </div>
                                        @endif
									</div>
								</div>

							    <div class="tab-pane fade" id="eliminar-ho" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						      		<div class="main_title_4">
										<h3><i class="icon_circle-slelected"></i>Selecciona fecha para eliminar horarios
                                        </h3>
								  	</div>
							      	      <hr>
								  	<div class="row add_bottom_45">
										<div class="col-lg-12">
											<div class="form-group ">
                                                @csrf
                                                <table class="table letra table-responsive" id="horarios">
                                                        @for($i=0; $i < $fil->count(); $i++)
                                                        <tr class="celda table-responsive vertical" id="d-d">
                                                            <th class="celda">
                                                                {{ $fil[$i]->fecha }}
                                                                <button class="btn close" id="mas">+</button>
                                                            </th>
                                                            @foreach($fil[$i]->hora as $h)
                                                            <td class="celda">
                                                                {{ $h['hora'] }}
                                                                <a href="{{ route('dispo.e',$h['id'])}}"  class="btn close" aria-label="Close" id="equis">
                                                                  &times;
                                                                </a>
                                                            </td>
                                                            @endforeach
                                                        </tr>
                                                        @endfor
                                                </table>
											</div>
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
												<th scope="col">Email</th>
												<th scope="col">Celular</th>
												</tr>
											</thead>
											<tbody>
												<tr>
												<th scope="row">1</th>
												<td>Manuel</td>
												<td>Campos</td>
												<td>m@campos</td>
												<td>987789087</td>
												</tr>
												<tr>
												<th scope="row">2</th>
												<td>Carlos</td>
												<td>Malpartida</td>
												<td>c@mail.com</td>
												<td>678987654</td>
												</tr>
												<tr>
												<th scope="row">3</th>
												<td>Maribel</td>
												<td>Terrones</td>
												<td>m@mail.com</td>
												<td>543678987</td>
												</tr>
											</tbody>
										</table>
									</div>
						      	</div>

						      	<div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="v-pills-messages-tab">
									<div class="main_title_4">
											<h3><i class="icon_circle-slelected"></i>Configura tu cuenta
                                            </h3>
									</div>
							      	<hr>
							      	<form action="{{ route('doctor.edit',$model->id)}}" method="post">
									  @csrf								<!--<div class="box_form">-->
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Nombres</label>
												<input type="text" class="form-control"  placeholder="Ingresa tus nombres" name="nombres" value="{{ $model->nombres }}">
											</div>
											<div class="form-group col-md-6">
												<label>Apellidos</label>
												<input type="text" class="form-control"  placeholder="Ingresa tus apellidos" name="apellidos" value="{{ $model->apellidos}}">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">

												<label>Codigo CMP</label>
												<input type="text" class="form-control"  placeholder="Ingresar CMP" name="cod_colegiatura" value="{{ $model->cod_colegiatura}}">

											</div>
											<div class="form-group col-md-6">
												<label>Direccion</label>
												<input type="text" class="form-control"  placeholder="Ingresa Direccion" name="direccion" value="{{ $model->direccion}}">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Fecha Nacimiento</label>
												<input type="text" class="form-control"  placeholder="Ingresa Fecha Nacimiento" value="{{ $model->fecha_nac}}">
											</div>
											<div class="form-group col-md-6">
												<label>Correo</label>
												<input type="email" class="form-control"  placeholder="Ingresa tu Correo" name="email" value="{{ $model->user->email}}">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Contraseña</label>
												<input type="password" class="form-control"  placeholder="Ingresa contraseña">
											</div>
											<div class="form-group col-md-6">
												<label>Confirmar contraseña</label>
												<input type="password" class="form-control"  placeholder="Confirmar contraseña">
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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        <script>
        var app = new Vue({
          el: '#agregar-ho',
          data: {
            fec:'',
            horas:[
                {hora:"" ,fecha:"", name:""}
            ],
            dessa:["2019/10/03"],
          }
        })
        var fecha = @json($fil);
        var fedes = [];
        // console.log(fecha[0].fecha);
         for (var i = 0; i < fecha.length; i++) {
            console.log(fecha[i].fecha);
            app.dessa.push(fecha[i].fecha);
         }
        console.log(app.dessa);
    </script>
    <script>
		$(document).ready(function(){

            var curr = new Date; // get current date
            var first = curr.getDate() - curr.getDay()+1; // First day is the day of the month - the day of the week
            var last = first + 6; // last day is the first day + 6

            var firstday = new Date(curr.setDate(first));
            var lastday = new Date(curr.setDate(last));


			var dd = $('.calendar').datepicker({
			    todayHighlight: true,
				daysOfWeekDisabled: [0],
				weekStart: 1,
				format: "yyyy-mm-dd",
				datesDisabled: app.dessa,
                startDate:firstday,
                endDate:lastday,
			}).on('changeDate', function(e) {
                console.log(e.date)
				    desactivar = e.format("yyyy/mm/dd")
                    app.fec = (e.format('yyyy-mm-dd'));
        		// `e` here contains the extra attributes
                    var fecha = $('#fecha')
                    fecha.value= app.fec
                    console.log(fecha)
                    console.log(app.dessa)
    		});
    	});
	</script>
	<script>
		var hi = $('#hora_i')
		var hf = $('#hora_f')
		var inter = $('#inter')
		var botn = $('#crear')
		var resul = $('#horas')
        $(document).ready(function(){
            $('#horas li label').hide()
            $('#enviar_ho').hide()
        })
        botn.on('click',()=>{
            if (app.fec.length == 0) {
                console.log("falta seleccionar una fecha")
            }
            else{
                if (hi.val() == 0 || hf.val()== 0 || inter.val() == 0) {
                    console.log("falta crear sus intervalos")
                }
                else{
                    $('#horas li').remove()
                    $('#horas li label').show()
                    $('#enviar_ho').show()
                      inMi = parseInt(hi.val().substr(3,2));
                      inHo = parseInt(hi.val().substr(0,2));

                      intMi = parseInt(inter.val().substr(3,2))
                      intHo = parseInt(inter.val().substr(0,2))

                      finMi = parseInt(hf.val().substr(3,2));
                      finHo = parseInt(hf.val().substr(0,2));

                    var i= 1
                  do {
                    if (inMi>=60) {
                    inMi = inMi - 60
                    inHo = inHo + 1
                    inMi = inMi.toString()
                    if (inMi.length<2) {
                        inMi = "0"+inMi
                    }
                    if (inHo === finHo) {
                        if (inMi>=finMi){
                            console.log("mal")
                        }
                        else{
                            hresu = inHo+":"+inMi
                            horp = inHo+"."+inMi
                            console.log(inHo+":"+inMi)
                            // resul.append("<li><input type='radio' id='radio"+i+"' name='radio_time[]' value='"+horp+"'form='hor_doc'/><label for='radio"+i+"'>"+hora+"</label></li>")
                            app.horas.push({
                                hora:hresu ,fecha:app.fec, name:"radio"+i
                            })
                        }
                    }
                    else{
                        hresu = inHo+":"+inMi
                        horp = inHo+"."+inMi
                        console.log(inHo+":"+inMi)
                        app.horas.push({
                                hora:hresu ,fecha:app.fec, name:"radio"+i
                            })
                    }
                    }
                    else{
                        inMi = inMi.toString()
                    if (inMi.length<2) {
                        inMi = "0"+inMi
                    }
                    if (inHo === finHo) {
                        if (inMi>=finMi){
                            console.log("mal")
                        }
                        else{
                        hresu = inHo+":"+inMi
                        horp = inHo+"."+inMi
                        console.log(inHo+":"+inMi)
                        app.horas.push({
                                hora:hresu ,fecha:app.fec, name:"radio"+i
                            })
                        }
                    }
                    else{
                        hresu = inHo+":"+inMi
                        horp = inHo+"."+inMi
                        console.log(inHo+":"+inMi)
                        app.horas.push({
                                hora:hresu ,fecha:app.fec, name:"radio"+i
                            })
                    }
                    }
                    inMi = parseInt(inMi)
                    inMi = inMi + intMi
                    i = i +1

                    }while (inHo < finHo);
                }
            }
        })
		fn_croppic('cropImgProfile', "{{ route('profile.image.store') }}", "{{ route('profile.image.delete') }}");
	</script>
@endsection
