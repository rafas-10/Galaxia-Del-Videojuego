@extends('layout')

@section('title', 'Contacto')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
                <form class="bg-white shadow rounded py-3 px-4">
                    @csrf
                    <h1 class="display-4">@lang('Contacto')</h1>
                    <hr>
                    <p class="font-weight-bold">Siguenos en nuestro Facebook: <a href="https://www.facebook.com"><i class="fab fa-facebook"></i> La galaxia del Videojuego te espera</a></p>
                    <p class="font-weight-bold">Por cualquier duda marca a nuestro número: <i class="fab fa-whatsapp"></i> 451-101-0967</p>
                    
                    

                </form>   
            </div> <!-- Class -->
        </div> <!-- Row -->
    </div> <!-- Container -->
    
@endsection