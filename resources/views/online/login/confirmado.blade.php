<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Refresh" content="3;{{route('login')}}">
    <title>BuscaunDoc -  Gracias por Registrarte</title>
    @extends('template.head')
    <style>
        .container{
            margin:20vh auto;
        }
    </style>
</head>
<body>
    
<div class="container margin_120">
    <div class=" row justify-content-center">
        <div class="col-lg-8">
            <div id="confirm">
                <div class="icon icon--order-success svg add_bottom_15">
                    <svg xmlns="http://www.w3.org/2000/svg" width="72" height="72">
                        <g fill="none" stroke="#8EC343" stroke-width="2">
                            <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                            <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                        </g>
                    </svg>
                </div>
            <h2>Gracias por Registrarte {{$bi}}</h2>
            <p>Recibiras una confirmacion con tus datos a tu correo</p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
