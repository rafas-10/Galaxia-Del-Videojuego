<!DOCTYPE html>
<html>
<head>

    <title>@yield('title', 'Galaxia')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">    
    <meta name="routeName" content="{{ Route::currentRouteName() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/52b1edd25c.js" crossorigin="anonymous"></script>
        
        
        
        

    <style>
        .active a {
            color: red;
            
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div id="app" class="d-flex flex-column h-screen justify-content-between">
        <header>
            @include('partials.nav')
        </header>

        <main class="py-4">
            @yield('contenido')
        </main>

        <footer class="bg-white text-center text-black-50 py-3 shadow">
            {{ config('app.name') }} | Copyright @ {{ date('Y') }} 
        </footer>    
    </div>
</body>
</html>
