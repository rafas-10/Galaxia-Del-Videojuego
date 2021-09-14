@extends('admin.master')

@section('title', 'Editar usuario')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/usuarios/all') }}"><i class="fas fa-users"></i>Usuarios</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/user/'.$u->id.'/edit') }}"><i class="fas fa-user"></i>Usuario: {{ $u->name }}</a>
    </li>
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="page_user">
    <div class="row">
        <div class="col-md-4">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-user"></i> Información</h1>
                </div> <!-- Header -->  

                <div class="inside">
                    <div class="mini_profile">
                        <div class="info">
                            <span class="title"><i class="fas fa-address-card"></i>Nombre: </span>
                            <span class="text"> {{ $u->name }} </span>
                            <span class="title"><i class="fas fa-user-tag"></i>Rol del usuario: </span>
                            <span class="text"> {{ getRoleUserArray(null, $u->role) }} </span>
                            <span class="title">Correo: </span>
                            <span class="text"><i class="fas fa-envelope"></i> {{ $u->email }} </span>
                            <span class="title"><i class="fas fa-calendar-alt"></i>Fecha y hora de registro: </span>
                            <span class="text"> {{ $u->created_at }} </span>
                            <span class="title"><i class="fas fa-toggle-on"></i>Estado del usuario: </span>
                            <span class="text"> {{ getUserStatusArray(null, $u->status) }} </span>
                        </div>
                        @if(kvfj(Auth::user()->permissions, 'banned'))
                        @if($u->status == "100")
                        <a href="{{ url('/admin/user/'.$u->id.'/banned') }} " class="btn btn-primary">Activar usuario</a>
                        @else
                        <a href="{{ url('/admin/user/'.$u->id.'/banned') }} " class="btn btn-danger">Suspender usuario</a>
                        @endif
                        @endif
                    </div><!-- Mini_Profile -->    
                </div><!-- Inside -->

            </div><!-- Panel Shadow -->
        </div><!-- Col-md-4 -->

        <div class="col-md-8">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-user-edit"></i> Editar información</h1>
                </div> <!-- Header -->    

                <div class="inside">
                    @if(kvfj(Auth::user()->permissions, 'edit'))
                    {!! Form::open(['url' => '/admin/user/'.$u->id.'/edit']) !!}
                        <div class="row">
                            <div class="col-md-6">
                                <label for="user_type">Tipo de usuario</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="far fa-keyboard"></i>
                                            </span>
                                        </div>
                                        {!! Form::select('user_type', getRoleUserArray('list', null), $u->role, ['class' => 'custom-select']) !!}
                                    </div>
                            </div>
                        </div>
                        <div class="row mtop16">
                            <div class="col-md-12">
                                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}

                    @endif                        
                </div><!-- Inside -->
            </div><!-- Panel Shadow -->
        </div><!-- Col-md-4 -->

    </div><!-- Row -->
    </div><!-- Page_User -->
</div> <!-- Container -->
@endsection
    