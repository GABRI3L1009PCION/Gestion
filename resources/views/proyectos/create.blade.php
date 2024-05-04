@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Nuevo Proyecto</h2>
        <form action="{{ route('proyectos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre del Proyecto:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
            </div>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <input type="text" class="form-control" id="estado" name="estado" required>
            </div>
            <div class="form-group">
                <label for="lider_id">Líder del Proyecto:</label>
                <select class="form-control" id="lider_id" name="lider_id">
                    <!-- Suponiendo que tienes una colección de usuarios posibles líderes -->
                    @foreach ($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear Proyecto</button>
        </form>
    </div>
@endsection

