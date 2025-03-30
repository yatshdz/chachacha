@extends('layouts.main')

@section('template_title')
    {{ $notificacion->id_usuario ?? __('Mostrar') . ' ' . __('Notificación') }}
@endsection

@section('panel-content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="float-left">
                        <span class="card-title">{{ __('Mostrar') }} Notificación</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('notificaciones.index') }}"> {{ __('Volver') }}</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong>ID Usuario:</strong> {{ $notificacione->id_usuario }}
                    </div>
                    <div class="mb-3">
                        <strong>Mensaje:</strong> {{ $notificacione->mensaje }}
                    </div>
                    <div class="mb-3">
                        <strong>Leído:</strong> {{ $notificacione->leido ? 'Sí' : 'No' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
