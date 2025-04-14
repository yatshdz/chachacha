@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <!-- Información sobre Chachacha -->
            <div class="text-center mb-4">
                <img src="{{ asset('images/logotipo.png') }}" alt="Chachacha Logo" class="img-fluid mb-4" width="200">
                <p class="lead">Tu aliado de confianza en servicios de limpieza. Brindamos soluciones eficientes para mantener tu espacio siempre limpio y ordenado.</p>
            </div>

            <!-- Card para el Login -->
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h4>Bienvenido a Chachacha</h4>
                    <p class="mb-0">Inicia sesión para continuar</p>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="mb-4 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Recordarme') }}</label>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid gap-2 mb-3">
                            <button type="submit" class="btn btn-primary btn-lg">{{ __('Iniciar sesión') }}</button>
                        </div>

                        <!-- Forgot Password Link -->
                        @if (Route::has('password.request'))
                            <div class="text-center">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            </div>
                        @endif
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
        background-image: url('{{ asset('images/logotipo.png') }}');
        background-size: cover;
        background-position: center;
    }

    /* Estilo de la tarjeta de login */
    .card {
        border-radius: 8px;
        overflow: hidden;
        background-color: rgba(255, 255, 255, 0.8);
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

    .text-center a {
        color: #007bff;
    }

    .text-center a:hover {
        text-decoration: underline;
    }
</style>
@endpush
