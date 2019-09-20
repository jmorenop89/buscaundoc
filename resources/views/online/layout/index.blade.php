@extends('online.layout.layout')

@section('content')
	
<main>
		<div class="hero_home version_1">
			<div  id="reserva" class="content">
				<h3>Busca un médico</h3>
				<p>
					Selecciona una especialidad y ciudad donde te encuentras.
				</p>
				<form method="post" action="list.html">
					<div id="custom-search-input">
						<div class="input-group">
							<input type="text" class=" search-query" placeholder="Ex. Name, Specialization ....">
							<input type="submit" class="btn_search" value="Search">
						</div>
						<ul>
							<li>
								<input type="radio" id="all" name="radio_search" value="all" checked>
								<label for="all">All</label>
							</li>
							<li>
								<input type="radio" id="doctor" name="radio_search" value="doctor">
								<label for="doctor">Doctor</label>
							</li>
							<li>
								<input type="radio" id="clinic" name="radio_search" value="clinic">
								<label for="clinic">Clinic</label>
							</li>
						</ul>
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
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_2">
						<span></span>
						<h3>Revisa su perfil</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="box_feat" id="icon_3">
						<h3>Reserva una cita</h3>
						<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie.</p>
					</div>
				</div>
			</div>
			<!-- /row -->
			<p class="text-center"><a href="list.html" class="btn_1 medium">Busca un médico</a></p>

		</div>
		<!-- /container -->

	
		<!-- /container -->

	
			<!-- /container -->
		<!-- </div> -->
		<!-- /app_section -->
	</main>
	<!-- /main content -->
	@endsection