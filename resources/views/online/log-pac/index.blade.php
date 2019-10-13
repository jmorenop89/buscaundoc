@extends('template.layout')

@section('tittle')
        BuscaUnDoc - Encuentra fácilmente un médico y reserva en linea una cita.
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

        <aside class="col-xl-3 col-lg-4" id=""> <!-- id="sidebar"-->
          <div class="box_profile">
            <figure>
              <img src="http://via.placeholder.com/565x565.jpg" alt="" class="img-fluid">
            </figure>
            <small>Paciente</small>
            <h1>{{ $model->nombres }}</h1>
            <hr>
                  <div  class="nav text-justify nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="display:inline-block;">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#ver-citas" role="tab" aria-controls="v-pills-home" aria-selected="true">Ver mis citas </a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#notifi" role="tab" aria-controls="v-pills-profile" aria-selected="false">Notificaciones</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#config" role="tab" aria-controls="v-pills-messages" aria-selected="false">Configuración</a>
                  </div>
          </div>
        </aside>
        <!-- /asdide -->

        <div class="col-xl-9 col-lg-8">

          <div class="tabs_styled_2">
            <!--/nav-tabs -->
                  <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade  show active" id="ver-citas" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="main_title_4">
    						<h3><i class="icon_circle-slelected"></i>Mis citas</h3>
    					</div>
                            <hr>
                    @foreach($cita as $c)
                        <div class="strip_list wow fadeIn">
                            <figure>
                              <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                            </figure>
                            <small>{{$c->disponibilidad->doctor->especialidad->nombre}}</small>
                            <h3>{{$c->disponibilidad->doctor->nombres}}</h3>
                            <p>{{ $fecha}} {{  $hora }}</p>
                            <a class="btn btn-primary" href="#" role="button">Pendiente</a>
                        </div>
                    @endforeach

                    </div>
                    <div class="tab-pane fade" id="notifi" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="main_title_4">
										<h3><i class="icon_circle-slelected"></i>Notificaciones</h3>
									</div>
                      <hr>
                      <!-- <div class="strip_list wow fadeIn"> -->
                      <div class="alert alert-primary mt-1" id="alerta">
				            	Le recordamos que en 3 dìas tiene una cita agendada con el médico Alberto Campos.
				            	<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
						          <span aria-hidden="true">&times;</span>
					            </button>
			              	</div>
                      <!-- </div> -->
                      <div class="alert alert-primary mt-1" id="alerta">
				            	Le recordamos que en 3 dìas tiene una cita agendada con el médico Alberto Campos.
				            	<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
						          <span aria-hidden="true">&times;</span>
					            </button>
                      </div>

                      <div class="alert alert-primary mt-1" id="alerta">
				            	Le recordamos que en 3 dìas tiene una cita agendada con el médico Alberto Campos.
				            	<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
						          <span aria-hidden="true">&times;</span>
					            </button>
                      </div>

                      <div class="alert alert-primary mt-1" id="alerta">
				            	Le recordamos que en 3 dìas tiene una cita agendada con el médico Alberto Campos.
				            	<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
						          <span aria-hidden="true">&times;</span>
					            </button>
			              	</div>

                    </div>
                    <div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                    <div class="main_title_4">
										<h3><i class="icon_circle-slelected"></i>Actualizar Datos</h3>
									</div>
                      <hr>
							      	<form action="{{ route('paciente.edit',$model->id)}}" method="post">
                        @csrf
										<!--<div class="box_form">-->
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Nombres</label>
													<input type="text" class="form-control" id="" placeholder="Ingresa tus nombres" name="nombres" value="{{ $model->nombres }}">
												</div>
												<div class="form-group col-md-6">
													<label>Apellidos</label>
													<input type="text" class="form-control" id="" placeholder="Ingresa tus apellidos" name="apellidos" value="{{ $model->apellidos }}">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Sexo</label>
													<input type="text" class="form-control" id="" placeholder="Sexo">
												</div>
												<div class="form-group col-md-6">
													<label>Fecha Nacimiento</label>
													<input type="text" class="form-control" id="" placeholder="Fecha Nacimiento" name="fecha_nac" value="{{ $model->fecha_nac }}">
												</div>
											</div>
											<div class="form-row">
												<div class="form-group col-md-6">
													<label>Telefono Celular</label>
													<input type="text" class="form-control" id="" placeholder="Ingresa Nº Celular" name="celular" value="{{ $model->celular }}">
												</div>
												<div class="form-group col-md-6">
                          <label>Correo</label>
													<input type="email" class="form-control" id="" placeholder="Ingresa tu Correo" name="email" value="{{ $model->user->email}}">
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
												<input class="btn_1" type="submit" value="Actualizar">
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
