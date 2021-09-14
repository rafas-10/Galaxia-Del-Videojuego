@extends('admin.master')

@section('title', 'FAQ')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/faq') }}"><i class="fas fa-question-circle"></i> FAQ</a>
    </li>
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-question-circle"></i> Preguntas y Respuestas</h2>
            <ul>
                <div class="inside">
                    @if(kvfj(Auth::user()->permissions, 'faq_add'))
                    <li>
                        <a href="{{ url('/admin/faq/add') }}"><i class="fas fa-plus-circle"></i> Agregar Preguntas y respuestas</a>
                    </li>
                    @endif
                    
                </div><!-- Inside -->
            </ul>

        </div><!-- Header -->

        <table class="table table-striped mtop16">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Pregunta</td>
                    <td>Respuesta</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                @foreach ($faq as $f)
                    <tr>
                        <td>{{ $f->id }} @if($f -> status == "0") <i class="fas fa-eraser" data-toggle="tooltip" data-placement="top" title="Estado: Borrador"></i>@endif</td>
                        <td>{{ $f->pregunta }}</td>
                        <td>{{ $f->respuesta }}</td>
                        <div class="opts">
                        <td>
                            @if(kvfj(Auth::user()->permissions, 'faq_edit'))
                            <a href="{{ url('/admin/faq/'.$f->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i> Editar</a>
                            @endif
                        </td>
                        <td>
                            @if(kvfj(Auth::user()->permissions, 'faq_delete'))
                            <a href="{{ url('/admin/faq/'.$f->id.'/delete') }}" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn-deleted" ><i class="fas fa-trash"></i> Eliminar</a>                                
                            @endif
                        </td>
                        </div>
                    </td>
                    </tr>
                @endforeach

            </tbody>

        </table>
  
      
    </div><!-- Panel shadow -->
</div><!-- Container-fluid -->
@endsection