@extends('template.layout')

@section('tittle')
    BUSCAUNDOC - Find easily a doctor and book online an appointment
@endsection

@section('content')
<div class="bg_color_2">
    <div class="justify-content-center">
        <div class="container margin_60_35">
            <div id="login">
                <h1>{{ __('Inicia sesion en BuscaunDoc') }}</h1>
                <div class="box_form ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
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
                        <div class="text-center offset-md">
                            <button type="submit" class="btn_1 medium">
                                    {{ __('Iniciar Sesion') }}
                                </button>
                        </div>
                    </form>
                </div>
                <p class="text-center link_bright">No tienes una cuenta <a href="#0"><strong>Registrate ahora!</strong></a></p>
            </div>
        </div>
    </div>
</div>
@endsection
