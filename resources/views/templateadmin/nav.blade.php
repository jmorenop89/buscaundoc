<div class="page-header navbar navbar-fixed-top">
    <div class="page-header-inner ">
        <!-- logo start -->
        <div class="page-logo">
            <a href="index.html">
                <img alt="" src="/admin/img/logo.png">
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
                <li class="dropdown dropdown-extended dropdown-notification" >
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="material-icons">notifications</i>
                        <span class="notify"></span>
                        <span class="heartbeat"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Notifications</span></h3>
                            <span class="notification-label purple-bgcolor">New 6</span>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">just now</span>
                                        <span class="details">
                                        <span class="notification-icon circle deepPink-bgcolor"><i class="fa fa-check"></i></span> Congratulations!. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">3 mins</span>
                                        <span class="details">
                                        <span class="notification-icon circle purple-bgcolor"><i class="fa fa-user o"></i></span>
                                        <b>John Micle </b>is now following you. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">7 mins</span>
                                        <span class="details">
                                        <span class="notification-icon circle blue-bgcolor"><i class="fa fa-comments-o"></i></span>
                                        <b>Sneha Jogi </b>sent you a message. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">12 mins</span>
                                        <span class="details">
                                        <span class="notification-icon circle pink"><i class="fa fa-heart"></i></span>
                                        <b>Ravi Patel </b>like your photo. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">15 mins</span>
                                        <span class="details">
                                        <span class="notification-icon circle yellow"><i class="fa fa-warning"></i></span> Warning! </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="time">10 hrs</span>
                                        <span class="details">
                                        <span class="notification-icon circle red"><i class="fa fa-times"></i></span> Application error. </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-menu-footer">
                                <a href="javascript:void(0)"> All notifications </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- end notification dropdown -->
                <!-- start message dropdown -->
					<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <i class="material-icons">question_answer</i>
                        <span class="notify"></span>
                        <span class="heartbeat"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="external">
                            <h3><span class="bold">Messages</span></h3>
                            <span class="notification-label cyan-bgcolor">New 2</span>
                        </li>
                        <li>
                            <ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                        	<img src="" class="/admin/img-circle" alt=""> </span>
                                        <span class="subject">
                                        	<span class="from"> Sarah Smith </span>
                                        	<span class="time">Just Now </span>
                                        </span>
                                        <span class="message"> Jatin I found you on LinkedIn... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                        	<img src="/admin/img/doc/doc3.jpg" class="/admin/img-circle" alt=""> </span>
                                        <span class="subject">
                                        	<span class="from"> John Deo </span>
                                        	<span class="time">16 mins </span>
                                        </span>
                                        <span class="message"> Fwd: Important Notice Regarding Your Domain Name... </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                        	<img src="/admin/img/doc/doc1.jpg" class="/admin/img-circle" alt=""> </span>
                                        <span class="subject">
                                        	<span class="from"> Rajesh </span>
                                        	<span class="time">2 hrs </span>
                                        </span>
                                        <span class="message"> pls take a print of attachments. </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                        	<img src="/admin/img/doc/doc8.jpg" class="/admin/img-circle" alt=""> </span>
                                        <span class="subject">
                                        	<span class="from"> Lina Smith </span>
                                        	<span class="time">40 mins </span>
                                        </span>
                                        <span class="message"> Apply for Ortho Surgeon </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="photo">
                                        	<img src="/admin/img/doc/doc5.jpg" class="/admin/img-circle" alt=""> </span>
                                        <span class="subject">
                                        	<span class="from"> Jacob Ryan </span>
                                        	<span class="time">46 mins </span>
                                        </span>
                                        <span class="message"> Request for leave application. </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="dropdown-menu-footer">
                                <a href="#"> All Messages </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- end message dropdown -->
					<!-- start manage user dropdown -->
					<li class="dropdown dropdown-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <img alt="" class="/admin/img-circle " src="/admin/img/dp.jpg" />
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