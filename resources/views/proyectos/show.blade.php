@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles del Proyecto</div>

                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $proyecto->id }}</p>
                        <p><strong>Nombre:</strong> {{ $proyecto->nombre }}</p>
                        <p><strong>Descripción:</strong> {{ $proyecto->descripcion }}</p>
                        <p><strong>Estado:</strong> {{ $proyecto->estado }}</p>

                        <a href="{{ route('proyectos.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

