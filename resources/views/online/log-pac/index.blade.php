@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('content')

      <main>
    <div id="breadcrumb">
      <div class="container">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Category</a></li>
          <li>Page active</li>
        </ul>
      </div>
    </div>
    <!-- /breadcrumb -->
    
    <div class="container margin_60">
      <div class="row">
        
        <aside class="col-xl-3 col-lg-4" id="sidebar">
          <div class="box_profile">
            <figure>
              <img src="http://via.placeholder.com/565x565.jpg" alt="" class="img-fluid">
            </figure>
            <small>Primary care - Internist</small>
            <h1>DR. Julia Jhones</h1>
            <hr>
                  <div class="nav text-justify nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#ver-citas" role="tab" aria-controls="v-pills-home" aria-selected="true">Ver mis citas </a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#notifi" role="tab" aria-controls="v-pills-profile" aria-selected="false">Notificaciones</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#config" role="tab" aria-controls="v-pills-messages" aria-selected="false">Configuración</a>
                  </div>
          </div>
        </aside>
        <!-- /asdide -->
        
        <div class="col-xl-9 col-lg-8">

          <div class="tabs_styled_2">
            <!--/nav-tabs -->
                  <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade  show active" id="ver-citas" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      3
                      <hr>
                      <div class="strip_list wow fadeIn">
                    <a href="#0" class="wish_bt"></a>
                    <figure>
                      <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                    </figure>
                    <small>Pediatrician</small>
                    <h3>Dr. Cornfield</h3>
                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
                    <ul>
                      <li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
                      <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
                      <li><a href="detail-page.html">Book now</a></li>
                    </ul>
                  </div>
                    </div>
                    <div class="tab-pane fade" id="notifi" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      3
                      <hr>
                      <div class="strip_list wow fadeIn">
                    <a href="#0" class="wish_bt"></a>
                    <figure>
                      <a href="detail-page.html"><img src="http://via.placeholder.com/565x565.jpg" alt=""></a>
                    </figure>
                    <small>Pediatrician</small>
                    <h3>Dr. Cornfield</h3>
                    <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cuodo....</p>
                    <span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
                    <a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
                    <ul>
                      <li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
                      <li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
                      <li><a href="detail-page.html">Book now</a></li>
                    </ul>
                  </div>
                    </div>

                    <div class="tab-pane fade" id="config" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                      4
                      <hr>
                      <form>
                    <div class="box_form">
                      <div class="form-group">
                        <label>Nombres</label>
                        <input type="text" class="form-control" placeholder="Ingresa tus nombres">
                      </div>
                      <div class="form-group">
                        <label>Apellidos</label>
                        <input type="text" class="form-control" placeholder="Ingresa tus apellidos">
                                    </div>
                                    <div class="form-group">
                        <label>Teléfono Celular</label>
                        <input type="text" class="form-control" placeholder="Ingresa Nº Celular">
                      </div>
                      <div class="form-group">
                        <label>Correo</label>
                        <input type="email" class="form-control" placeholder="Ingresa tu Correo">
                      </div>
                      <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Ingresa contraseña">
                      </div>
                      <div class="form-group">
                        <label>Confirmar contraseña</label>
                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirmar constraseña">
                      </div>
                      <div id="pass-info" class="clearfix"></div>
                      <div class="checkbox-holder text-left">
                        <div class="checkbox_2">
                          <input type="checkbox" value="accept_2" id="check_2" name="check_2" checked>
                          <label for="check_2"><span>Estoy de acuerdo con los <strong>terminos y condiciones</strong></span></label>
                        </div>
                      </div>
                      <div class="form-group text-center add_top_30">
                        <input class="btn_1" type="submit" value="Enviar">
                      </div>
                    </div>
                    <p class="text-center"><small>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</small></p>
                  </form>
                    </div>

                  </div>
                  
            <!-- /tab-content -->
          </div>
          <!-- /tabs_styled -->
        </div>
        <!-- /col -->
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </main>
  <!-- /main -->
  
@endsection
