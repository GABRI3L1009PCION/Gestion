@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Reporte</h1>
        <div class="card">
            <div class="card-header">
                Reporte ID: {{ $reporte->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Tipo de Reporte: {{ $reporte->tipo_reporte }}</h5>
                <p class="card-text">Fecha: {{ $reporte->fecha ? $reporte->fecha->format('d/m/Y') : 'N/A' }}</p>
                <p class="card-text">Datos:</p>
                <pre>{{ json_encode($reporte->datos, JSON_PRETTY_PRINT) }}</pre>
                <a href="{{ route('reportes.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection
