@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nueva Persona</h1>

    <!-- Formulario de creación de persona -->
    <form action="{{ route('faker.personas.store') }}" method="POST">
        @csrf
        <!-- Aquí iría un formulario para crear una persona -->
    </form>
</div>
@endsection
