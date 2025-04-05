@extends('layouts.main')

@section('panel-content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Crear Servicio</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('servicios.store') }}" method="POST">
                @csrf
                @include('servicio.form')
            </form>
        </div>
    </div>
</div>
@endsection
