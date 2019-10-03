<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
	    <div id="remove-scroll" class="left-sidemenu">
	        <ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
	            <li class="sidebar-toggler-wrapper hide">
	                <div class="sidebar-toggler">
	                    <span></span>
	                </div>
	            </li>
	            <li class="sidebar-user-panel">
	                <div class="user-panel">
	                    <div class="pull-left image">
	                        <img src="/admin/img/dp.jpg" class="/admin/img-circle user-img-circle" alt="User Image" />
	                    </div>
	                    <div class="pull-left info">
	                        <p> Dr. Emily</p>
	                        <small>Admin</small>
	                    </div>
	                </div>
	            </li>
	            <li class="nav-item open">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="material-icons">dashboard</i>
	                    <span class="title">Dashboard</span>
	                    <span class="selected"></span>
	                	<span class="arrow open"></span>
	                </a>
	                <ul class="sub-menu">
	                    <li class="nav-item  active open">
	                        <a href="{{route('dash.index')}}" class="nav-link ">
	                            <span class="title">Estadisticas</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                    <li class="nav-item ">
	                        <a href="dashboard2.html" class="nav-link ">
	                            <span class="title">Graficas</span>
	                        </a>
	                    </li>
	                </ul>
	            </li>
	            <li class="nav-item open">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="material-icons">dashboard</i>
	                    <span class="title">Pacientes</span>
	                    <span class="selected"></span>
	                	<span class="arrow open"></span>
	                </a>
	                <ul class="sub-menu">
	                	<li href="" class="nav-item">
	                        <a href="{{route('pac.index')}}" class="nav-link ">
	                            <span class="title">Todos los Pacientes</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                    <li class="nav-item">
	                        <a href="{{route('pac.crear')}}" class="nav-link ">
	                            <span class="title">Agregar Paciente</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                    
	                </ul>
	            </li>
	            <li class="nav-item open">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="material-icons">dashboard</i>
	                    <span class="title">Doctores</span>
	                    <span class="selected"></span>
	                	<span class="arrow open"></span>
	                </a>
	                <ul class="sub-menu">
	                	<li href="" class="nav-item">
	                        <a href="{{route('doc.index')}}" class="nav-link ">
	                            <span class="title">Todos los Doctores</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                    <li class="nav-item">
	                        <a href="{{route('doc.crear')}}" class="nav-link ">
	                            <span class="title">Agregar Doctor</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                   
	                </ul>
				</li>
				<li class="nav-item open">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="material-icons">dashboard</i>
	                    <span class="title">Especialidades</span>
	                    <span class="selected"></span>
	                	<span class="arrow open"></span>
	                </a>
	                <ul class="sub-menu">
	                	<li href="" class="nav-item">
	                        <a href="{{route('espec.index')}}" class="nav-link ">
	                            <span class="title">Todas las Especialidades</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                    <li class="nav-item">
	                        <a href="{{route('espec.crear')}}" class="nav-link ">
	                            <span class="title">Agregar Especialidad</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                   
	                </ul>
				</li>
				<li class="nav-item open">
	                <a href="#" class="nav-link nav-toggle">
	                    <i class="material-icons">dashboard</i>
	                    <span class="title">Ciudades</span>
	                    <span class="selected"></span>
	                	<span class="arrow open"></span>
	                </a>
	                <ul class="sub-menu">
	                	<li href="" class="nav-item">
	                        <a href="{{route('ciud.index')}}" class="nav-link ">
	                            <span class="title">Todas las Ciudades</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                    <li class="nav-item">
	                        <a href="{{route('ciud.crear')}}" class="nav-link ">
	                            <span class="title">Agregar Ciudad</span>
	                            <span class="selected"></span>
	                        </a>
	                    </li>
	                   
	                </ul>
	            </li>
	        </ul>
	    </div>
	</div>
</div>