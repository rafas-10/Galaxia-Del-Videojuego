@extends('admin.master')

@section('title', 'Usuarios')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/usuarios/all') }}"><i class="fas fa-users"></i>Usuarios</a>
    </li>
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-users"></i> Administración de usuarios</h1>
        </div> <!-- Header -->  

        <div class="inside">
            <div class="row">
                <div class="col-md-2 offset-md-10">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%";>
                            <i class="fas fa-filter"></i> Filtro
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ url('/admin/usuarios/all') }}"><i class="fas fa-users"></i> Todos</a>
                            <a class="dropdown-item" href="{{ url('/admin/usuarios/1') }}"><i class="fas fa-user-check"></i> Verificados</a>
                            <a class="dropdown-item" href="{{ url('/admin/usuarios/0') }}"><i class="fas fa-times"></i> No verificados</a>
                            <a class="dropdown-item" href="{{ url('/admin/usuarios/100') }}"><i class="fas fa-times-circle"></i> Suspendidos</a>
                          </div>
                    </div>
                </div>
            </div>

            <table class="table mtop16">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombres y apellidos</td>
                        <td>Email</td>
                        <td>Estado</td>
                        <td>Rol</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ getUserStatusArray(null, $user->status) }}</td>
                            <td>{{ getRoleUserArray(null, $user->role) }}</td>
                            
                            <div class="opts">

                                @if(kvfj(Auth::user()->permissions, 'edit'))
                            <td>
                                <a href="{{ url('/admin/user/'.$user->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-user-edit"></i>Editar</a>
                            </td>
                                @endif

                                @if(kvfj(Auth::user()->permissions, 'permissions'))
                            <td>
                                <a href="{{ url('/admin/user/'.$user->id.'/permissions') }}" data-toggle="tooltip" data-placement="top" title="Permisos"><i class="fas fa-user-cog"></i>Permisos</a>                                
                            </td>

                                @endif
                            <td>
                                @if(kvfj(Auth::user()->permissions, 'delete'))
                                    <a href="{{ url('/admin/user/'.$user->id.'/delete') }}" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn-deleted" ><i class="fas fa-trash"></i> Eliminar</a>                                
                                @endif
                            </td>

                            </div>
                        </tr>
                    @endforeach
                        <tr>
                            <td colspan="8">{!! $users->render() !!}</td>        
                        </tr>
                </tbody>
            </table><!-- Table -->
        </div><!-- Inside  --> 

    </div> <!-- panel -->
</div> <!-- Container -->
@endsection
    