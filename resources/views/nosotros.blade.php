@extends('layout')

@section('title', 'Nosotros')

@section('contenido')

<div class="container">
    <div class="row">
        @csrf
        <div class="col-12 col-lg-6">
        <h1 class="display-4 text-primary">@lang('Sobre Nosotros')</h1>
        <hr>
            <h4>Somos una empresa dedicada a la renta de consolas de videojuegos, comprometidos con el entretenimiento para todas las edades, contamos con 8 consolas Xbox One, 4 consolas Xbox 360 y una gran variedad de juegos, pasa y disfruta. No te arrepentiras</h4>
        </div>

        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-3" src="/img/logo1.PNG" alt="Galaxia del Videojuego">
            <!--<img class="img-fluid" src="/img/dream.svg" alt="Galaxia del Videojuego"> -->
        </div>

    </div>
</div>

            
                
@endsection