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
	@yield('js')


	 <!-- Bootstrap Typeahead Plugin -->

<script>
var search = document.querySelector('.especialidad')
var contenido = document.querySelector('#especialidad')


//buscar especialidades.json y filtrarlos

const buscarEspecialidades = async buscarTexto =>{
    const resultado = await fetch('http://buscaundoc.test/api/especialidad')
    const especialidades = await resultado.json()

    //Obtener coincidencias con el texto del input
    let coincidencias = especialidades.filter(especialidad =>{
        const regex = new RegExp(`^${buscarTexto}`,'gi')
        return especialidad.nombre.match(regex)
    })
    if(buscarTexto.length === 0){
        coincidencias = []
        contenido.innerHTML = ""
    }
    //mostar coincidencias en el html

    const outputHtml = coincidencias =>{
        if (coincidencias.length > 0) {
            const html = coincidencias.map(match =>
                `<div class="card card-body mb-1">
                    <h4>${match.nombre}</h4>
                    <small>especialidad</small>
                `).join('')
            contenido.innerHTML = html
        }
    }
    outputHtml(coincidencias)
}


search.addEventListener('input', ()=> buscarEspecialidades(search.value))

</script>



</body>

</html>
