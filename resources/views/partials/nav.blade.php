<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">

    <div class="container">
    
<a class="navbar-brand" href="{{ route('home') }}">
    {{ config('app.name')}}
</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link {{ setActive('home') }}"
                href="{{ route('home') }}">
            @lang('Inicio')</a>
        </li>

        <li class="nav-item">
            <a  class="nav-link {{ setActive('galeria') }}"
                href="{{ route('galeria') }}">
            @lang('Galería')</a>
        </li>
        
        <li class="nav-item">
            <a class="nav-link {{ setActive('nosotros') }}"
                href="{{  route('nosotros') }}">
            @lang('Nosotros')</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ setActive('faq') }}"
                href="{{ url('faq') }}">
            @lang('Preguntas y respuestas')</a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ setActive('contacto') }}"
                href="{{ route('contacto') }}">
            @lang('Contacto')</a>
        </li>

        @auth
            <li class="nav-item">
                <a class="nav-link"
                    href="#"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar Sesión</a>
            </li>
       
            <li class="nav-item">
                <a class="nav-link {{ setActive('dashboard') }}"            
                    href="{{ route('dashboard') }}">Panel Administrador</a>
            </li>   
          

        @else
            <li class="nav-item">
                <a class="nav-link {{ setActive('login') }}"            
                    href="{{ route('login') }}">Login</a>
            </li>
        @endauth
    </ul>
</div>
</div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

