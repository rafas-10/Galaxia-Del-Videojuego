@extends('admin.master')

@section('title', 'Galeria')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/galeria') }}"><i class="fas fa-images"></i> Galería</a>
    </li>
@endsection

@section('contenido')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fas fa-images"></i> Galería</h2>
            </div><!-- Header -->

                <div class="inside">
                    @if(kvfj(Auth::user()->permissions, 'galeria_new'))
                        <a href="{{ Route('galeria_new') }}" class="btn btn-lg btn-success">Agregar nueva imagen</a>
                    @endif
                </div>
            <div class="container mt-5">

                <table class="table mt-5">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Imagen</th>
                    </tr>
                    </thead>
                    <tbody>
                        @forelse($images as $image)
                    <tr>
                    <th scope="row">{{ $image->id }}</th>
                        <td>{{ $image->title }}</td>
                            <td><img src="{{ asset('storage') .'/'. $image->image }}" alt="" width="200"></td>
                        <td>
                        @if(kvfj(Auth::user()->permissions, 'galeria_delete'))                                
                            <a href="{{ url('/admin/galeria/'.$image->id.'/delete') }}" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn-deleted" ><i class="fas fa-trash"></i> Eliminar</a>                                
                        @endif                            
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <th scope="row"></th>
                        <td>No hay registros</td>
                        <td></td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
              
            </div>
        </div><!-- Panel shadow -->
    </div><!-- container fluid -->
@endsection