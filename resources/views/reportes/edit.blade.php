@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Reporte</h1>
        <form action="{{ route('reportes.update', $reporte->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tipo_reporte">Tipo de Reporte:</label>
                <input type="text" class="form-control" id="tipo_reporte" name="tipo_reporte" value="{{ old('tipo_reporte', $reporte->tipo_reporte) }}" required>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha', $reporte->fecha->format('Y-m-d')) }}" required>
            </div>

            <div class="form-group">
                <label for="datos">Datos (JSON):</label>
                <textarea class="form-control" id="datos" name="datos" required>{{ old('datos', json_encode($reporte->datos)) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Reporte</button>
        </form>
    </div>
@endsection
