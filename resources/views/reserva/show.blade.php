@extends('layouts.app')

@section('template_title')
    {{ $reserva->id_cliente ?? __('Mostrar') . ' ' . __('Reserva') }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Mostrar') }} Reserva</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('reservas.index') }}"> {{ __('Volver') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>ID Cliente:</strong> {{ $reserva->id_cliente }}
                    </div>
                    <div class="mb-3">
                        <strong>ID Trabajador:</strong> {{ $reserva->id_trabajador }}
                    </div>
                    <div class="mb-3">
                        <strong>Fecha:</strong> {{ $reserva->fecha }}
                    </div>
                    <div class="mb-3">
                        <strong>Duración:</strong> {{ $reserva->duracion }}
                    </div>
                    <div class="mb-3">
                        <strong>Estado:</strong> {{ $reserva->estado }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
