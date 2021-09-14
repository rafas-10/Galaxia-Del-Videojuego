@extends('layout')

@section('title', 'Inicio')

@section('contenido')

<div class="container">
    <div class="row">

        <!--<div class="col-12 col-lg-6">
            <img class="img-fluid" src="/img/dream.svg" alt="Galaxia del Videojuego">
        </div>-->
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">@lang('Inicio')</h1>
            <p class="lead text-secondary">Bienvenido    @auth{{ auth()->user()->name}} @endauth
                al sitio web de la Galaxia del videojuego, ubicada entre la calle:  General Felix Ireta Viveros y Jose María Morelos #19.</p>
            <p class="lead text-secondary">Visitanos y disfruta de nuestras instalaciones.</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contacto') }}">Información de contacto</a><br>
        </div>

        <div class="col-12 col-lg-6">
            
            <img class="img-fluid mb-6" src="/img/logo1.PNG" alt="Galaxia del Videojuego">
            
            <!--<img class="img-fluid" src="/img/dream.svg" alt="Galaxia del Videojuego">-->
            
        </div>

    </div>
</div>

@endsection