@extends('layouts.main')

@section('template_title', __('Editar Rol'))

@section('panel-content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-user-edit me-2"></i>{{ __('Editar a ') }} {{ $role->nombre }}
                    </h5>
                    <a class="btn btn-sm btn-primary" href="{{ route('roles.index') }}">
                        <i class="fas fa-arrow-left me-2"></i>{{ __('Volver') }}
                    </a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.update', $role->_id) }}">
                        @csrf
                        @method('PUT')
                        @include('role.form', ['btnText' => __('Actualizar')])
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection