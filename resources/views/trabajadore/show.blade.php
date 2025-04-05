@extends('layouts.main')

@section('panel-content')
<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Detalle del Trabajador</h4>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6"><strong>Nombre:</strong> {{ $trabajadore->nombre }}</div>
                <div class="col-md-6"><strong>Apellido:</strong> {{ $trabajadore->apellido }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6"><strong>Disponibilidad:</strong> {{ $trabajadore->disponibilidad }}</div>
                <div class="col-md-6"><strong>Tarifa por Hora:</strong> ${{ number_format($trabajadore->tarifa_por_hora, 2) }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6"><strong>Experiencia:</strong> {{ $trabajadore->experiencia }}</div>
                <div class="col-md-6"><strong>Especialidad:</strong> {{ $trabajadore->especialidad }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12"><strong>Email:</strong> {{ $trabajadore->email }}</div>
            </div>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('trabajadores.index') }}" class="btn btn-sm btn-secondary">
                <i class="bi bi-arrow-left"></i> Volver
            </a>
        </div>
    </div>
</div>
@endsection
