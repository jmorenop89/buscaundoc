@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('css')
 <style>
        /*login*/
    #login {
      width: 400px;
      color: #fff;
    }
    @media (min-width: 320px) {
      #login {
        width: 85%;
        margin: 30px auto;
      }
    }
    @media (max-width: 320px) {
      #login {
        width: 95%;
        margin: 30px auto;
      }
      #login .box_form{
        padding: 10px 30px
      }
    }
    .box_form {
      background-color: #fff;
      padding: 30px;
      -webkit-border-radius: 5px;
      -moz-border-radius: 5px;
      -ms-border-radius: 5px;
      border-radius: 5px;
      -webkit-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.3);
      -moz-box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 0px 30px 0px rgba(0, 0, 0, 0.3);
      margin-bottom: 25px;
      color: #555;
    }
    .box_form label {
      font-weight: 600;
      font-size: 15px;
      /*font-size: 0.8125rem;*/
      margin-bottom: 3px;
    }
    .box_form .form-group {
      margin-bottom: 25px;
    }
</style> 
@endsection

@section('content')
<div class="bg_color_2">
    <div class="container pt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center text-white">{{ __('Iniciar sesión') }}</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="box_form">
                            <div class="form-group">
                                    <label for="email" class="col-form-label">Correo electrónico</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label for="password" class="col-form-label">Contraseña</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group checkbox-holder">
                                <div class="checkbox_2">
                                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="" for="remember">
                                            <span>
                                                {{ __('Remember Me') }}
                                            </span>
                                        </label>
                                </div>
                            </div>
                            <div class="text-left">
                                    <a class="btn btn-link form-group" href="{{ route('password.request') }}">
                                            {{ __('Olvidaste tu conraseña') }}
                                    </a>
                            </div>
                            <div class="form-group text-center add_top_30">
                                <button type="submit" class="btn_1">
                                        {{ __('Iniciar Sesion') }}
                                    </button>
                            </div>
                        </div>
                        <p class="text-center">
                                No tienes una cuenta <a href="#0"><strong>Registrate ahora!</strong></a>
                        </p>
                    </form>
                </div>
<<<<<<< HEAD
=======
                <p class="text-center link_bright">No tienes una cuenta <a href="#0"><strong>Registrate ahora!</strong></a></p>
>>>>>>> 15f4ab78f58c60c0db7583c808671f52ce6cf989
        </div>
    </div>
</div>
@endsection
