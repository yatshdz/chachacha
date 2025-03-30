@extends('layouts.app')

@section('template_title')
    {{ $pago->id_reserva ?? __('Mostrar') . ' ' . __('Pago') }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                    <div class="float-left">
                        <span class="card-title">{{ __('Mostrar') }} Pago</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('pagos.index') }}"> {{ __('Volver') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>ID Reserva:</strong> {{ $pago->id_reserva }}
                    </div>
                    <div class="mb-3">
                        <strong>ID Cliente:</strong> {{ $pago->id_cliente }}
                    </div>
                    <div class="mb-3">
                        <strong>Monto:</strong> {{ $pago->monto }}
                    </div>
                    <div class="mb-3">
                        <strong>Estado:</strong> {{ $pago->estado }}
                    </div>
                    <div class="mb-3">
                        <strong>Método de Pago:</strong> {{ $pago->metodo_pago }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
