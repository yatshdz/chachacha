@extends('layouts.main')

@section('template_title')
    {{ $role->user_id ?? __('Mostrar') . ' ' . __('Role') }}
@endsection

@section('panel-content')
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <div class="float-left">
            <span class="card-title">{{ __('Mostrar') }} Role</span>
          </div>
          <div class="float-right">
            <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}"> {{ __('Volver') }}</a>
          </div>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <strong>User ID:</strong> {{ $role->user_id }}
          </div>
          <div class="mb-3">
            <strong>Rol:</strong> {{ $role->rol }}
          </div>
          <div class="mb-3">
            <strong>Verificado:</strong> {{ $role->verificado ? 'Sí' : 'No' }}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
