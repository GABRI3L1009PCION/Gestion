{{-- resources/views/usuarios/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuario</h1>
        <form method="POST" action="{{ route('usuarios.update', $usuario->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}" required>
            </div>
            <select multiple class="form-control" id="roles" name="roles[]">
                @foreach($roles as $role)
                    <option value="{{ $role->id }}" {{ $usuario->roles->contains('id', $role->id) ? 'selected' : '' }}>
                        {{ $role->nombre }}
                    </option>
                @endforeach
            </select>



            <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
        </form>
    </div>
@endsection
