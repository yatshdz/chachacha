@extends('layouts.main')

@section('template_title')
    Detalle del Perfil
@endsection

@section('panel-content')
<div class="container-fluid">
    <div class="row padding-1 p-1">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ __('Detalle del Perfil') }}</h4>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>Trabajador:</strong>
                        {{ $perfile->role->nombre }} {{ $perfile->role->apellido }}
                    </div>
                    <div class="mb-3">
                        <strong>Experiencia:</strong>
                        {{ $perfile->experiencia }} años
                    </div>
                    <div class="mb-3">
                        <strong>Tarifa por Hora:</strong>
                        ${{ number_format($perfile->tarifa_por_hora, 2) }}
                    </div>
                    <div class="mb-3">
                        <strong>Disponibilidad:</strong>
                        @if($perfile->disponibilidad)
                            <span class="badge bg-success">Disponible</span>
                        @else
                            <span class="badge bg-secondary">No disponible</span>
                        @endif
                    </div>
                    <div class="mb-3">
                        <strong>Calificación:</strong>
                        {{ $perfile->calificacion }}
                    </div>
                    <div class="mb-3">
                        <strong>Número de Reseñas:</strong>
                        {{ $perfile->numero_resenas }}
                    </div>
                    <div class="mt-3">
                        <a href="{{ route('perfiles.index') }}" class="btn btn-secondary">{{ __('Volver') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
