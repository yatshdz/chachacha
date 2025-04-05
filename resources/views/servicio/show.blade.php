@extends('layouts.main')

@section('panel-content')
<div class="container mt-4">
    <div class="card shadow-lg">
        <div class="card-header bg-info text-white">
            <h4 class="mb-0">Detalle del Servicio</h4>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Nombre:</strong> {{ $servicio->nombre }}
            </div>
            <div class="mb-3">
                <strong>Descripción:</strong> {{ $servicio->descripcion }}
            </div>
            <div class="mb-3">
                <strong>Costo:</strong> ${{ number_format($servicio->costo, 2) }}
            </div>
            <div class="mb-3">
                <strong>Duración Aproximada:</strong> {{ $servicio->duracion_aproximada }}
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-success btn-sm me-2">
                <i class="bi bi-pencil-square"></i> Editar
            </a>
            <a href="{{ route('servicios.index') }}" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i> Volver
            </a>
        </div>
    </div>
</div>
@endsection
