<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="RedstarHospital" />
    <title>Buscaundoc | Administración</title>
     <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="/assets/admin/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="/assets/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="/assets/admin/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="/assets/admin/img/favicon.ico" /> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
            <form class="login100-form validate-form" method="POST" action="{{ route('admin') }}">
					<span class="login100-form-logo">
						<img alt="" src="/assets/img/heart.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Iniciar Sesión
                    </span>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="email" placeholder="Usuario">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Contraseña">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Recuerdarme
						</label>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Ingresar
						</button>
					</div>
					<!-- div class="text-center p-t-30">
						<a class="txt1" href="forgot_password.html">
							Forgot Password?
						</a>
					</div -->
				</form>
			</div>
		</div>
	</div>
    <!-- start js include path -->
     <script src="/assets/admin/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="/assets/admin/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="/assets/admin/js/pages/extra_pages/extra_pages.js"></script>
    <!-- end js include path -->
</body>
</html>