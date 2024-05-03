{{-- resources/views/usuarios/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Usuario</h1>
        <div class="card">
            <div class="card-header">
                Usuario #{{ $usuario->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $usuario->nombre }}</h5>
                <p class="card-text">Email: {{ $usuario->email }}</p>
                <p class="card-text">Rol: {{ $usuario->rol }}</p>
                <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver a la lista</a>
            </div>
        </div>
    </div>
@endsection
