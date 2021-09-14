@extends('admin.master')

@section('title', 'Administrador')

@section('contenido')

    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fas fa-home"></i> Panel de Administrador</h2>
            </div>

            <div class="inside">
                Bienvenido al panel de administrador: {{ Auth::user()->name }}, por favor seleccione una de las opciones para agregar, editar y eliminar información  referente a los apartados que se muestran.<br>
                Que tenga un buen dia <i class="far fa-smile-wink"></i><br><hr>
                <button type="button" class="btn btn-primary" onclick= "event.preventDefault(); document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="top" title="Salir">
                    Cerrar sesión <i class="fas fa-sign-out-alt"></i>
                </button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        @if(kvfj(Auth::user()->permissions, 'dashboard_small_stats'))
        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fas fa-chart-bar"></i> Estadísticas rápidas.</h2>
                    <div class="row mtop5 container-fluid">
                        <div class="col-md-11">
                            <div class="panel shadow">
                                <div class="header">
                                    <h2 class="title"><i class="fas fa-users"></i> Usuarios.</h2>
                                </div>
                                <div class="inside">
                                    <div class="big_count">{{ $users }}</div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row mtop16 -->
            </div>
        </div>
        @endif
    </div>

@endsection    
    