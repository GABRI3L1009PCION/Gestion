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

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h1>Lista de Usuarios</h1>
                <a href="{{ route('usuarios.create') }}" class="btn btn-primary mb-3">Crear Nuevo Usuario</a>

                @if ($usuarios->isEmpty())
                    <p>No hay usuarios registrados en el sistema.</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->nombre }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info btn-sm">Ver</a>
                                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de querer eliminar este usuario?')">Eliminar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </main>
        </div>
    </div>
@endsection
