@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Proyecto</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('proyectos.update', $proyecto->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nombre">Nombre del Proyecto</label>
                                <input type="text" id="nombre" name="nombre" value="{{ $proyecto->nombre }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" name="descripcion" class="form-control">{{ $proyecto->descripcion }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select id="estado" name="estado" class="form-control">
                                    <option value="En progreso" {{ $proyecto->estado == 'En progreso' ? 'selected' : '' }}>En progreso</option>
                                    <option value="Completado" {{ $proyecto->estado == 'Completado' ? 'selected' : '' }}>Completado</option>
                                    <option value="Cancelado" {{ $proyecto->estado == 'Cancelado' ? 'selected' : '' }}>Cancelado</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                                <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Cancelar</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
