@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Persona</h1>

    <!-- Formulario de edición de persona -->
    <form action="{{ route('faker.personas.update', $persona['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Aquí iría el formulario para editar los detalles de la persona -->
    </form>
</div>
@endsection
