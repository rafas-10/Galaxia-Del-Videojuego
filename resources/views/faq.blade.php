@extends('layout')

@section('title', 'FAQ')

@section('contenido')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4">

    <h1 class="display-4 mb-0">@lang('FAQ')</h1>
    <hr>
    @foreach ($faq as $f)

                <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-dark list-group-flush  shadow-sm">
                        {{ $f->pregunta }}
                    </li> 
                    </ul>
                    <li class="list-group-item disabled list-group-flush mb-3 shadow-sm">
                        {{ $f->respuesta }}
                    </li>    
   
     

                @endforeach
            </form>
        </div>
    </div>    
</div>
@endsection
