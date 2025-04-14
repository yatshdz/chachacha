@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Lista de Personas Falsas</h1>
    <div class="row">
        @foreach($personas as $persona)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{ $persona['image'] }}" alt="Imagen de la persona">
                    <div class="card-body">
                        <h5 class="card-title">{{ $persona['firstname'] }} {{ $persona['lastname'] }}</h5>
                        <p class="card-text"><strong>Email:</strong> {{ $persona['email'] }}</p>
                        <p class="card-text"><strong>Teléfono:</strong> {{ $persona['phone'] }}</p>
                        <p class="card-text"><strong>Cumpleaños:</strong> {{ $persona['birthday'] }}</p>
                        <p class="card-text"><strong>Género:</strong> {{ ucfirst($persona['gender']) }}</p>
                        <p class="card-text"><strong>Dirección:</strong> {{ $persona['address']['street'] }}, {{ $persona['address']['city'] }}</p>
                        <a href="{{ route('faker.personas.show', $persona['id']) }}" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
