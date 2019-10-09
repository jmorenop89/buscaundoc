@extends('template.layout')

@section('tittle')
    BUSCAUNDOC - Find easily a doctor and book online an appointment
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
            height: 180px;
            margin: 10px auto;
        }
    }@media(min-width: 480px){
        .container{
            max-height: 60vh;
        }
        .box_form{
            width: 400px;
            height: 180px;
            margin:30px auto;
        }
    }
</style>
@endsection

@section('content')
<div class="bg_color_2">
    <div class="justify-content-center">
        <div class="container margin_60_35">
            <div id="reset">
            <div class="box_form">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="col-form-label">Correo Electronico</label>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="text-center">
                                <button type="submit" class="btn_1">
                                    Enviar correo
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
