<!DOCTYPE html>
<html lang="en">
    @include('template.head')
<body>
    <!-- preloader -->
    	<!-- <div id="preloader" class="Fixed">
    	<div data-loader="circle-side"></div>
    	</div> -->
	<!-- /Preload-->

	<div id="page">

		<header class="header_sticky">
        <!-- menu colapsado -->
    		<a href="#menu" class="btn_mobile">
    			<div class="hamburger hamburger--spin" id="hamburger">
    				<div class="hamburger-box">
    					<div class="hamburger-inner"></div>
    				</div>
    			</div>
    		</a>
		<!-- menu colapsado-->

		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="" title="Findoctor">Findoctor</a></h1>
					</div>
				</div>
				<div class="col-lg-9 col-6">
					
					<nav id="menu" class="main-menu">
						<ul  id="top_access">
							<li>
								<span><a href="/">Inicio</a></span>
							</li>
							<!-- <li>
								<span><a href="">¿Cómo Funciona?</a></span>
							</li> -->
                            <li>
								<span><a href="">Regístrate</a></span>
								<ul>
									<li><a href="{{ route('reg-pac') }}">Como Paciente</a></li>
									<li><a href="{{ route('reg-doc') }}">Como Mèdico</a></li>
								</ul>
							</li>

							<li>
                                <span><a href="{{ route('login')}}">Iniciar Sesión</a></span>
                            </li>

							<li>
                                <span id="reserva">
                                <div><a class="btn_1 text-white">Reserva una cita</a></div>
                            </span>
						</li>
						<li id="user">
						<figure><img src="http://via.placeholder.com/150x150.jpg" alt="">
						</figure>
							<span><a href="">
								Jhon Smith</a>
							</span>
						</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	    </header>
		@yield('content')

    @include('template.footer')

    </div>
    <!-- page -->
<!-- 
	<div id="toTop"></div> -->
	<!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="/online/js/jquery-2.2.4.min.js"></script>
    <script src="/online/js/common_scripts.min.js"></script>
	<script src="/online/js/functions.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="/online/js/markerclusterer.js"></script>
    <script src="/online/js/map_listing.js"></script>
	<script src="/online/js/infobox.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
    <script src="/online/js/bootstrap-datepicker.js"></script>
    <script>
			$('.calendar').datepicker({
			    todayHighlight: true,
				daysOfWeekDisabled: [0],
				weekStart: 1,
			    format: "yyyy-mm-dd",
    			datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
			});
	</script>
	<script>
	  $(function(){
		  $('.calendar').datepicker({
			  onclick: function(date) {
				  alert(date);
			  }
		  });
	  });
	</script>


	 <!-- Bootstrap Typeahead Plugin -->
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

 

</body>

</html>
