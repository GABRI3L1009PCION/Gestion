{{-- resources/views/auth/login.blade.php --}}
@extends('layouts.app')

@section('content')
    <div class="login-container">
        <div class="login-box">
            <div class="login-logo">
                <img src="{{ asset('image/perfil.png') }}" alt="Perfil">
            </div>
            <div class="login-form">
                <h2>Sistema Gestor de Proyectos </h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Usuario" required autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="login-button">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<style>
    body, html {
        height: 100%;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .login-container {
        background-image: url("{{ asset('image/icono.jpg') }}");
        background-size: cover;
        background-position: center;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-box {
        background: rgba(255, 255, 255, 0.8);
        padding: 20px;
        border-radius: 8px;
        width: 350px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    .login-logo img {
        width: 100px; /* Adjust size accordingly */
        display: block;
        margin: 0 auto 20px;
    }

    .login-form h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .login-button {
        width: 100%;
        padding: 10px;
        background-color: #f05f57;
        border: none;
        color: white;
        border-radius: 4px;
        cursor: pointer;
    }

    .login-button:hover {
        background-color: #e04e46;
    }
</style>
