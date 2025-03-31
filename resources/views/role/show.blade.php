@extends('layouts.main')

@section('template_title')
    {{ __('Detalles del Usuario') }} {{ $role->nombre ?? '' }}
@endsection

@section('panel-content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-user-tag me-2"></i>{{ __('Información del Usuario') }}
                    </h5>
                    <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}">
                        <i class="fas fa-arrow-left me-2"></i>{{ __('Volver') }}
                    </a>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-3">{{ __('Nombre') }}</dt>
                        <dd class="col-sm-9">{{ $role->nombre }}</dd>

                        <dt class="col-sm-3">{{ __('Apellido') }}</dt>
                        <dd class="col-sm-9">{{ $role->apellido }}</dd>

                        <dt class="col-sm-3">{{ __('Rol') }}</dt>
                        <dd class="col-sm-9 text-capitalize">{{ $role->rol }}</dd>

                        <dt class="col-sm-3">{{ __('Verificado') }}</dt>
                        <dd class="col-sm-9">{{ $role->verificado ? 'Sí' : 'No' }}</dd>

                        <dt class="col-sm-3">{{ __('Creado') }}</dt>
                        <dd class="col-sm-9">{{ $role->created_at->format('d/m/Y H:i') }}</dd>

                        <dt class="col-sm-3">{{ __('Actualizado') }}</dt>
                        <dd class="col-sm-9">{{ $role->updated_at->format('d/m/Y H:i') }}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection