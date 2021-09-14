@extends('admin.master')

@section('title', 'Agregar FAQ')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/faq') }}"><i class="fas fa-question-circle"></i> FAQ</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/faq/add') }}"><i class="fas fa-plus-circle"></i> Agregar FAQ</a>
    </li>
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-question-circle"></i> Preguntas y Respuestas</h2>
        </div><!-- Header -->
        
        <div class="inside">
            {!! Form::open(['url' => '/admin/faq/add']) !!}
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Ingrese la pregunta</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-comment"></i>
                            </span>
                          </div>
                        {!! Form::text('pregunta', null, ['class' => 'form-control']) !!}
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="">Ingrese la respuesta:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-comment-dots"></i>
                            </span>
                          </div>
                        {!! Form::text('respuesta', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>

            <div class="row mtop16">
                <div class="col-md-12">
                    {!! Form::submit('Guardar la información', ['class' => 'btn btn-success']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>

    </div><!-- Panel shadow -->
</div><!-- Container-fluid -->
@endsection