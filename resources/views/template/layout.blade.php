<!DOCTYPE html>
<html lang="en">
    @include('template.head')
    <style>
    	@media(min-width: 992px){
    		.container ul ul{
                margin: 5px 0 0 0;
                border-top: blue 2px solid;
    		}
            .container ul ul li{
                margin-right: 20px
            }
            .container ul ul li p{
                margin: 10px;
            }
    		.container ul ul li a{
    			border:none;
    		}
    	}
    </style>
<body>
    <!-- preloader -->
    	<div id="preloader" class="Fixed">
    	<div data-loader="circle-side"></div>
    	</div>
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
						<h1><a href="/" title="Findoctor">Findoctor</a></h1>
					</div>
				</div>
				<div class="col-lg-7 col-6">

					<nav id="menu" class="main-menu">
						<ul  id="top_access">
							<li>
								<span><a href="/">Inicio</a></span>
							</li>
                            @guest
                            <li>
								<span><a style="cursor:pointer">Regístrate</a></span>
								<ul>
									<li><a href="{{ route('reg-pac') }}">Como Paciente</a></li>
									<li><a href="{{ route('reg-doc') }}">Como Mèdico</a></li>
								</ul>
							</li>

							<li>
                                <span><a href="{{ route('login')}}">Iniciar Sesión</a></span>
                            </li>
						@endguest
							<li>
                                <span id="reserva">
                                <div><a class="btn_1 text-white">Reserva una cita</a></div>
                            </span>
							</li>
                        @auth
                            <li id="user">
                                <figure><img src="http://via.placeholder.com/150x150.jpg" alt=""></figure>
                                <span><a>{{Auth::user()->email}}</a></span>
                                <ul>
                                    <li><a href="{{ route('profile') }}"> Mi Perfil</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();$('#logout-form').submit();">Cerrar Sesion</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">@csrf</form>
                                </ul>
                            </li>
                        @endauth
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
	<script src="/assets/online/js/jquery-2.2.4.min.js"></script>
	<!-- Bootstrap Typeahead Plugin -->
    <script src="/assets/online/js/common_scripts.min.js"></script>
	<script src="/assets/online/js/functions.js"></script>
	<script src="/assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script src="/assets/plugins/jquery-validation/js/localization/messages_es_PE.js"></script>
	<!-- SPECIFIC SCRIPTS -->
	@yield('js')
</body>

</html>
