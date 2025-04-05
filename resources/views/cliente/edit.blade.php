@extends('layouts.app')

@section('template_title')
    Editar Cliente
@endsection

@section('content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form method="POST" action="{{ route('clientes.update', $cliente->_id) }}">
        @csrf
        @method('PATCH')
        @include('cliente.form')
        <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
    </form>
</div>
@endsection
