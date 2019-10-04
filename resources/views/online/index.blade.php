@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('content')
    	<div class="hero_home version_1">
    		<div  id="reserva" class="content">
    			<h3>Busca un médico</h3>
    			<p>
    				Selecciona una especialidad y ciudad donde te encuentras.
    			</p>
				<form method="get" action="/list">
    				<div id="custom-search-input"> <!-- custom-search-input revisar mañana-->							
        					<input type="text" class="typeahead especialidad" placeholder="Especialidad"> 
        					 <input type="text" class="typeahead2 ciudad" placeholder="Ciudad">
							<input type="submit" class="buscar" value= "Buscar"> 
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
		</div>
		
		<div class="bg_color_1">
			<div class="container">  <!-- margin_120_95 -->
				<div class="main_title">
					<h2>Últimos médicos registrados</h2>
					<p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri.</p>
				</div>
				<div id="reccomended" class="owl-carousel owl-theme">
					<div class="item">
						<a href="detail-page.html">
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician - Cardiologist</em></h4>
							</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
						</a>
					</div>
					<div class="item">
						<a href="detail-page.html">
							<div class="title">
								<h4>Dr. Julia Holmes<em>Pediatrician</em></h4>
							</div><img src="http://via.placeholder.com/350x500.jpg" alt="">
						</a>
					</div>
				</div>
				<!-- /carousel -->
			</div>
			<!-- /container -->
		</div>
@endsection

@section('js')
	<script src="/online/jQuery-Bootstrap-4-Typeahead-Plugin/bootstrap3-typeahead.js"></script>
	<script>
		var $input = $(".typeahead") ;
		var $input = $(".typeahead2") ;

		if ($input = $(".typeahead")) {
		    
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

		};


		if ($input = $(".typeahead2")) {
		    
			$input.typeahead({
		  source: [
			{id:"id1", name:"Trujillo"},
		{id:"id2", name:"Lima"},
		{id:"id3", name:"Arequipa"},
		{id:"id4", name:"Chiclayo"},
		{id:"id5", name:"Piura"},
		{id:"id6", name:"Chimbote"},
		{id:"id7", name:"Tacna"},
		{id:"id8", name:"Tumbes"},
		{id:"id9", name:"Iquitos"},
		{id:"id10", name:"Tarapoto"},
		{id:"id11", name:"Ayacucho"},
		{id:"id12", name:"Huancayo"}

		  ] , autoSelect: true
		}) ;

		};

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
