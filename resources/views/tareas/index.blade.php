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
                    <h1>Tareas</h1>
                    <a href="{{ route('tareas.create') }}" class="btn btn-primary">Crear Nueva Tarea</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->nombre }}</td>
                                <td>{{ $tarea->descripcion }}</td>
                                <td>{{ $tarea->estado }}</td>
                                <td>{{ $tarea->fecha_inicio ? $tarea->fecha_inicio->format('d/m/Y') : 'N/A' }}</td>
                                <td>{{ $tarea->fecha_fin ? $tarea->fecha_fin->format('d/m/Y') : 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('tareas.show', $tarea->id) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('tareas.destroy', $tarea->id) }}" method="POST" style="display: inline-block;">
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
