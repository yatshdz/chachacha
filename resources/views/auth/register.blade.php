@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Bienvenido a Chachacha</h4>
                    <p class="mb-0">Crea una cuenta para comenzar</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Nombre -->
                        <div class="mb-4">
                            <label for="name" class="form-label">{{ __('Nombre completo') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Correo electrónico -->
                        <div class="mb-4">
                            <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Contraseña -->
                        <div class="mb-4">
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirmación de contraseña -->
                        <div class="mb-4">
                            <label for="password-confirm" class="form-label">{{ __('Confirmar contraseña') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <!-- Botón de registro -->
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">{{ __('Registrar cuenta') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    /* Fondo y espaciado para la página */
    body {
        background-color: #f4f7fc;
        padding: 50px 0;
    }

    /* Estilo de la tarjeta de registro */
    .card {
        border-radius: 8px;
        overflow: hidden;
    }

    .card-header {
        background-color: #007bff;
        font-size: 1.5rem;
    }

    .card-body {
        background-color: #ffffff;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        font-size: 1.2rem;
        padding: 12px 20px;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .form-label {
        font-weight: bold;
    }

    .invalid-feedback {
        display: block;
    }
</style>
@endpush
