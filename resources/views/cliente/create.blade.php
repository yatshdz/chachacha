@extends('layouts.main')

@section('template_title')
    Crear Cliente
@endsection

@section('panel-content')
<div class="container">
    <h1>Crear Cliente</h1>
    <form method="POST" action="{{ route('clientes.store') }}">
        @csrf
        @include('cliente.form')
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
</div>
@endsection
