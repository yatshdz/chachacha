@extends('layouts.main')

@section('panel-content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Detalle de la Reserva</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Cliente:</strong> {{ $reserva->cliente->nombre ?? 'N/A' }}
            </div>
            <div class="mb-3">
                <strong>Trabajador:</strong> {{ $reserva->trabajador->nombre ?? 'N/A' }}
            </div>
            <div class="mb-3">
                <strong>Servicio:</strong> {{ $reserva->servicio->nombre ?? 'N/A' }}
            </div>
            <div class="mb-3">
                <strong>Fecha:</strong> {{ \Carbon\Carbon::parse($reserva->fecha)->format('d/m/Y H:i') }}
            </div>
            <div class="mb-3">
                <strong>Duración:</strong> {{ $reserva->duracion ?? 'N/A' }}
            </div>
            <div class="mb-3">
                <strong>Estado:</strong> {{ ucfirst($reserva->estado) }}
            </div>
            <div class="mb-3">
                <strong>Comentarios:</strong> {{ $reserva->comentarios }}
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-success btn-sm me-2">
                <i class="bi bi-pencil-square"></i> Editar
            </a>
            <a href="{{ route('reservas.index') }}" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Volver
            </a>
        </div>
    </div>
</div>
@endsection
