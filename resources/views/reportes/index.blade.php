@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="container-fluid">
                <div class="row">
                    <!-- Sidebar -->
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-white sidebar collapse">
                        <div class="position-sticky pt-3 sidebar-sticky">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}" style="text-transform: uppercase; color: black; background-color: white; font-weight: bold; font-size: 1.2em;">
                                        Inicio
                                    </a>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('proyectos.index') }}" style="text-transform: uppercase; color: black; background-color: white; font-weight: bold; font-size: 1.2em;">
                                        Proyectos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('tareas.index') }}" style="text-transform: uppercase; color: black; background-color: white; font-weight: bold; font-size: 1.2em;">
                                        Tareas
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('reportes.index') }}" style="text-transform: uppercase; color: black; background-color: white; font-weight: bold; font-size: 1.2em;">
                                        Reportes
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('usuarios.index') }}" style="text-transform: uppercase; color: black; background-color: white; font-weight: bold; font-size: 1.2em;">
                                        Usuarios
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('auditorias.index') }}" style="text-transform: uppercase; color: black; background-color: white; font-weight: bold; font-size: 1.2em;">
                                        Auditorías
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="container">
                    <h1>Reportes</h1>
                    <a href="{{ route('reportes.create') }}" class="btn btn-primary">Crear Nuevo Reporte</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tipo de Reporte</th>
                            <th>Fecha</th>
                            <th>Datos</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reportes as $reporte)
                            <tr>
                                <td>{{ $reporte->tipo_reporte }}</td>
                                <td>{{ $reporte->fecha ? $reporte->fecha->format('d/m/Y') : 'N/A' }}</td>
                                <td>{{ json_encode($reporte->datos) }}</td>
                                <td>
                                    <a href="{{ route('reportes.show', $reporte->id) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('reportes.edit', $reporte->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('reportes.destroy', $reporte->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
@endsection
