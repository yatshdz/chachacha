@extends('layouts.main')

@section('panel-content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Editar Reserva</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
                @csrf
                @method('PATCH')
                @include('reserva.form')
            </form>
        </div>
    </div>
</div>
@endsection
