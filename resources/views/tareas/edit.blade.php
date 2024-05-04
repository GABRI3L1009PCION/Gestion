@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Tarea</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tareas.update', $tarea->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $tarea->nombre) }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ old('descripcion', $tarea->descripcion) }}</textarea>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{ old('estado', $tarea->estado) }}" required>
            </div>

            <div class="form-group">
                <label for="fecha_inicio">Fecha de Inicio:</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" value="{{ old('fecha_inicio', $tarea->fecha_inicio) }}">
            </div>

            <div class="form-group">
                <label for="fecha_fin">Fecha de Fin:</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="{{ old('fecha_fin', $tarea->fecha_fin) }}">
            </div>
            <div class="form-group">
                <label for="proyecto_id">ID del Proyecto:</label>
                <input type="number" class="form-control" id="proyecto_id" name="proyecto_id" value="{{ old('proyecto_id', $tarea->proyecto_id) }}" required>
            </div>


            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
