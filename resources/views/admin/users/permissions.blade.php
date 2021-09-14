@extends('admin.master')

@section('title', 'Editar permisos')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/usuarios/all') }}"><i class="fas fa-users"></i>Usuarios</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/user/'.$u->id.'/permissions') }}"><i class="fas fa-cog"></i>Permisos del usuario: {{ $u->name }} (ID: {{ $u->id }})</a>
    </li>
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="page_user">
        <form action="{{ url('/admin/user/'.$u->id.'/permissions') }}" method="POST">
                @csrf
                <div class="row">
                @include('admin.users.permissions.module_dashboard')
                @include('admin.users.permissions.module_usuarios')
                @include('admin.users.permissions.module_galeria')
                @include('admin.users.permissions.module_faq')
                </div><!-- Row -->

                <div class="row mtop16">
                    <div class="col-md-12">
                        <div class="panel shadow">
                            <div class="inside">
                                <input type="submit" value="Guardar configuración" class="btn btn-primary" style="width: 100%";>
                            </div>
                        </div>
                    </div>
                </div>

    </div><!-- Page_User -->
        </form>
</div> <!-- Container -->
@endsection
    