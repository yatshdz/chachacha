@extends('layouts.main')

@section('template_title')
    {{ $resena->id_reserva ?? __('Mostrar') . ' ' . __('Reseña') }}
@endsection

@section('panel-content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Mostrar') }} Reseña</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('resenas.index') }}"> {{ __('Volver') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>ID Reserva:</strong> {{ $resena->id_reserva }}
                    </div>
                    <div class="mb-3">
                        <strong>ID Cliente:</strong> {{ $resena->id_cliente }}
                    </div>
                    <div class="mb-3">
                        <strong>ID Trabajador:</strong> {{ $resena->id_trabajador }}
                    </div>
                    <div class="mb-3">
                        <strong>Calificación:</strong> {{ $resena->calificacion }}
                    </div>
                    <div class="mb-3">
                        <strong>Comentario:</strong> {{ $resena->comentario }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
