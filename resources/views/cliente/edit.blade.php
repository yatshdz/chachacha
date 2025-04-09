@extends('layouts.main')

@section('template_title')
    Editar Cliente
@endsection

@section('panel-content')
<div class="container">
    <h1>Editar Cliente</h1>
    <form method="POST" action="{{ route('clientes.update', $cliente->_id) }}">
        @csrf
        @method('PATCH')
        @include('cliente.form')
    </form>
</div>
@endsection
