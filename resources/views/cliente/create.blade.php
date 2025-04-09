@extends('layouts.main')

@section('template_title')
    Crear Cliente
@endsection

@section('panel-content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Crear Cliente</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('clientes.store') }}">
                @csrf
                @include('cliente.form')
            </form>
        </div>
    </div>
</div>
@endsection
