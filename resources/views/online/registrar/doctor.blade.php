@extends('online.layout.layout')

@section('content')
    
<main>
		<div id="hero_register">
			<div class="container margin_120_95">			
				<div class="row">
					<div class="col-lg-6">
						<h1>Es hora de encontrarte!</h1>
						<p class="lead">Te pri adhuc simul. No eros errem mea. Diam mandamus has ad. Invenire senserit ad has, has ei quis iudico, ad mei nonumes periculis.</p>
						<div class="box_feat_2">
							<i class="pe-7s-map-2"></i>
							<h3>Deje que los pacientes lo encuentren!</h3>
							<p>Ut nam graece accumsan cotidieque. Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet.</p>
						</div>
						<div class="box_feat_2">
							<i class="pe-7s-date"></i>
							<h3>Administre facilmente sus citas</h3>
							<p>Has voluptua vivendum accusamus cu. Ut per assueverit temporibus dissentiet. Eum no atqui putant democritum, velit nusquam sententiae vis no.</p>
						</div>
						<div class="box_feat_2">
							<i class="pe-7s-phone"></i>
							<h3>Al instante a través de una Web</h3>
							<p>Eos eu epicuri eleifend suavitate, te primis placerat suavitate his. Nam ut dico intellegat reprehendunt, everti audiam diceret in pri, id has clita consequat suscipiantur.</p>
						</div>
					</div>
					<!-- /col -->
					<div class="col-lg-5 ml-auto">
						<div class="box_form">
							<div id="message-register"></div>
							<form method="post" action="assets/register_doctor.php" id="register_doctor">
								<div class="row">
									<div class="col-md-6 ">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Nombres" name="name_register" id="name_register">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Apellidos" name="lastname_register" id="lastname_register">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Especialidad" name="specialization" id="specialization">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select class="form-control" name="country_register" id="country_register">
                                                <option value="">Country</option>
												<option value="Europe">Europe</option>
												<option value="Asia">Asia</option>
												<option value="Unated States">Unated States</option>
											</select>
										</div>
									</div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Ciudad" name="city_register" id="city_register">
                                        </div>
                                    </div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Dirección" name="address_register" id="address_register">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Teléfono Celular" name="mobile_register" id="mobile_register">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Teléfono Oficina" name="office_phone_register" id="office_phone_register">
										</div>
									</div>
								</div>
								<!-- /row -->
								<div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" id="verify_register" class="form-control" placeholder="CMP">
										</div>
									</div>
								</div>
                                <!-- /row -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Correo" name="email_register" id="email_register">
                                        </div>
                                    </div>
                                </div>
								<!-- /row -->
								<div><input type="submit" class="btn_1" value="Submit" id="submit-register"></div>
							</form>
						</div>
						<!-- /box_form -->
					</div>
					<!-- /col -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /hero_register -->
	</main>

	<!-- /main content -->
@endsection