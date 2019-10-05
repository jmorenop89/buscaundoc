@extends('template.layout')

@section('tittle')
    FINDOCTOR - Find easily a doctor and book online an appointment
@endsection

@section('css')
 <style>
        .box_form{
        margin: auto;
    }
    @media(min-width: 320px){
        .container.margin_60_35{
            padding-bottom: 30px
        }
        .box_form{
            margin: 10px auto;
        }
    }@media(min-width: 480px){

        .box_form{
            width: 400px;
            margin:30px auto;
        }
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
                        <div class="box_form mb-4">
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
                                                {{ __('Recordar contraseña') }}
                                            </span>
                                        </label>
                                </div>
                            </div>
                           
                            <div class="form-group text-center">   <!-- add_top_30 -->
                                <button type="submit" class="btn_1">
                                        {{ __('Iniciar Sesion') }}
                                    </button>

                                    <p class="text-left mt-3">
                                No tienes una cuenta , <a href="#0"><strong>Registrate ahora!</strong></a>
                        </p>

                        <a class="btn btn-link form-group" href="{{ route('password.request') }}">
                                            {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                            </div>
                            </div>
                        </div>
                        
                    </form>
                </div>
        </div>
    </div>
</div>
@endsection
