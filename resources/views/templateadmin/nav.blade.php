<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
            <a href="index.html">
                <img alt="" src="/assets/admin/img/logo.png">
                <span class="logo-default" >Admin</span>
            </a>
        </div>
        <!-- logo end -->
		<ul class="nav navbar-nav navbar-left in">
			<li><a href="#" class="menu-toggler sidebar-toggler font-size-20"><i class="fa fa-exchange" aria-hidden="true"></i></a></li>
		</ul>
		<ul class="nav navbar-nav navbar-left in">
		 	<li class="dropdown dropdown-extended dropdown-notification" >
                    <a href="javascript:;" class="dropdown-toggle app-list-icon font-size-20" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="fa fa-th" aria-hidden="true"></i>
                    </a>
                    <ul class="dropdown-menu app-icon">
                    	<li class="app-dropdown-header">
                            <p><span class="bold">Aplicaciones</span></p>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list app-icon-dropdown" data-handle-color="#637283">
								<li>
									<a href="{{route('pac.crear')}}" class="patient-icon">
										<i class="material-icons">local_hotel</i>
										<span class="block">Agregar Paciente</span>
									</a>
								</li>
								<li>
									<a href="{{route('pac.index')}}" class="patient-icon">
										<i class="material-icons">people</i>
										<span class="block">Todos los Pacientes</span>
									</a>
								</li>
								<li>
									<a href="{{route('dash.index')}}" class="appoint-icon">
										<i class="material-icons">assignment</i>
										<span class="block">Ver Estadisticas</span>
									</a>
								</li>
								<li>
									<a href="{{route('doc.crear')}}" class="doctor-icon">
										<i class="material-icons">person</i>
										<span class="block">Agregar Doctor</span>
									</a>
								</li>
								<li>
									<a href="{{route('doc.index')}}" class="doctor-icon">
										<i class="material-icons">people</i>
										<span class="block">Todos los Doctores</span>
									</a>
								</li>
								<li>
									<a href="payments.html" class="appoint-icon">
										<i class="material-icons">assignment</i>
										<span class="block">Ver las Graficas</span>
									</a>
								</li>
                            </ul>
                        </li>
                    </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-left in">
        	<!-- start full screen button -->
            <li><a href="javascript:;" class="fullscreen-click font-size-20"><i class="fa fa-arrows-alt"></i></a></li>
            <!-- end full screen button -->
        </ul>
        <!-- start header menu -->
        <div class="top-menu">
            <ul class="nav navbar-nav pull-right">
                <!-- start notification dropdown -->
                
                <!-- end notification dropdown -->
                <!-- start message dropdown -->
					
                <!-- end message dropdown -->
					<!-- start manage user dropdown -->
					<li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="/admin/img-circle " src="/assets/admin/img/usuario.png" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-default">
                        <li>
                            <a href="user_profile.html">
                                <i class="fa fa-user"></i> Profile </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-cogs"></i> Settings
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-question-circle"></i> Help
                            </a>
                        </li>
                        <li>
                            <a href="lock_screen.html">
                                <i class="fa fa-lock"></i> Lock
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                Salir
                            </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </li>
                    </ul>
                </li>
                <!-- end manage user dropdown -->
                <li class="dropdown dropdown-quick-sidebar-toggler">
                     <a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right" data-upgraded=",MaterialButton">
                       <i class="material-icons">settings</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>