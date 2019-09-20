<!DOCTYPE html>
<html lang="en">

@include('online.layout.head')
<body>
		<div id="preloader" class="Fixed">
		<div data-loader="circle-side"></div>
		</div>
		<!-- /Preload-->

		<div id="page">	

		<header class="header_sticky">	
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<!-- /btn_mobile-->
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-6">
					<div id="logo_home">
						<h1><a href="index.html" title="Findoctor">Findoctor</a></h1>
					</div>
				</div>
				<div class="col-lg-9 col-6">

					<nav id="menu" class="main-menu">
						<ul>
							<li>
								<span><a href="#0">Inicio</a></span>
							</li>

							<li>
								<span><a href="#funcionamiento">¿Cómo Funciona?</a></span>

							</li>

							<li>
								<span><a href="#0">Contáctanos</a></span>

							</li>
							<li>
								<span><a href="#0">Regístrate</a></span>
								<ul>
									<li><a href="index.html">Como Paciente</a></li>
									<li><a href="index-2.html">Como Mèdico</a></li>							
								</ul> 
							</li>

							<li><span><a href="#">Iniciar Sesión</a></span></li>

							<li><span id="reserva"><div class="btn_1 text-white" href="#" >Reserva una cita</div></span></li>
						</ul>
					</nav>
					<!-- /main-menu -->
				</div>
			</div>
		</div>
		<!-- /container -->
	</header>
		@yield('content')

	@include('online.layout.footer')

	
</div>
	<!-- page -->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="/online/js/jquery-2.2.4.min.js"></script>
	<script src="/online/js/common_scripts.min.js"></script>
	<script src="/online/js/functions.js"></script>

</body>

</html>