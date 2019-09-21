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
						<ul>
							<li>
								<span><a href="/">Inicio</a></span>
							</li>
							<li>
								<span><a href="">¿Cómo Funciona?</a></span>
							</li>
                            <li>
								<span><a href="">Regístrate</a></span>
								<ul>
									<li><a href="/paciente">Como Paciente</a></li>
									<li><a href="/doctor">Como Mèdico</a></li>
								</ul>
							</li>

							<li>
                                <span><a href="/login">Iniciar Sesión</a></span>
                            </li>

							<li>
                                <span id="reserva">
                                <div><a class="btn_1 text-white">Reserva una cita</a></div>
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

	<div id="toTop"></div>
	<!-- Back to top button -->

    <!-- COMMON SCRIPTS -->
    <script src="/online/js/jquery-2.2.4.min.js"></script>
    <script src="/online/js/common_scripts.min.js"></script>
    <script src="/online/js/functions.js"></script>

</body>

</html>
