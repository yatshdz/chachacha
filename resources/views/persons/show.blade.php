@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Persona</h1>

    @if ($persona)
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ $persona['image'] }}" alt="Imagen de {{ $persona['firstname'] }}" class="img-fluid">
                    </div>
                    <div class="col-md-9">
                        <h3>{{ $persona['firstname'] }} {{ $persona['lastname'] }}</h3>
                        <p><strong>Email:</strong> {{ $persona['email'] }}</p>
                        <p><strong>Teléfono:</strong> {{ $persona['phone'] }}</p>
                        <p><strong>Fecha de Nacimiento:</strong> {{ $persona['birthday'] }}</p>
                        <p><strong>Género:</strong> {{ ucfirst($persona['gender']) }}</p>
                        <p><strong>Dirección:</strong> {{ $persona['address']['street'] }}, {{ $persona['address']['city'] }}</p>
                        <p><strong>Pais:</strong> {{ $persona['address']['country'] }}</p>
                        <p><strong>Website:</strong> <a href="{{ $persona['website'] }}" target="_blank">{{ $persona['website'] }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <p>No se encontró la persona.</p>
    @endif
</div>
@endsection
