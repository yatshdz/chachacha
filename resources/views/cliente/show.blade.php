@extends('layouts.app')

@section('template_title')
    Mostrar Cliente
@endsection

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <div class="card">
        <div class="card-body">
            <p><strong>Nombre:</strong> {{ $cliente->nombre }}</p>
            <p><strong>Apellido:</strong> {{ $cliente->apellido }}</p>
            <p><strong>Correo:</strong> {{ $cliente->correo }}</p>
            <p><strong>Teléfono:</strong> {{ $cliente->telefono }}</p>
            <p><strong>Dirección:</strong> {{ $cliente->direccion }}</p>
        </div>
    </div>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
