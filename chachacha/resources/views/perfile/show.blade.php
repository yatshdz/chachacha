@extends('layouts.app')

@section('template_title')
    {{ $perfile->id_usuario ?? __('Mostrar') . ' ' . __('Perfil') }}
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="float-left">
                        <span class="card-title">{{ __('Mostrar') }} Perfil</span>
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('perfiles.index') }}"> {{ __('Volver') }}</a>
                    </div>
                </div>
                <div class="card-body bg-white">
                    <div class="mb-3">
                        <strong>ID Usuario:</strong> {{ $perfile->id_usuario }}
                    </div>
                    <div class="mb-3">
                        <strong>Experiencia:</strong> {{ $perfile->experiencia }}
                    </div>
                    <div class="mb-3">
                        <strong>Disponibilidad:</strong> {{ $perfile->disponibilidad }}
                    </div>
                    <div class="mb-3">
                        <strong>Tarifa por Hora:</strong> {{ $perfile->tarifa_por_hora }}
                    </div>
                    <div class="mb-3">
                        <strong>Reseñas:</strong> {{ $perfile->numero_resenas }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
