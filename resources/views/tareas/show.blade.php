@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Tarea</h1>
        <div class="card">
            <div class="card-header">
                Detalles
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $tarea->nombre }}</h5>
                <p class="card-text"><strong>Descripción:</strong> {{ $tarea->descripcion }}</p>
                <p class="card-text"><strong>Estado:</strong> {{ $tarea->estado }}</p>
                <p class="card-text"><strong>Fecha de Inicio:</strong> {{ $tarea->fecha_inicio ? $tarea->fecha_inicio->format('d/m/Y') : 'No definida' }}</p>
                <p class="card-text"><strong>Fecha de Fin:</strong> {{ $tarea->fecha_fin ? $tarea->fecha_fin->format('d/m/Y') : 'No definida' }}</p>
                <a href="{{ route('tareas.index') }}" class="btn btn-primary">Volver a la lista</a>
            </div>
        </div>
    </div>
@endsection
