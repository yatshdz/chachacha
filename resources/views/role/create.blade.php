@extends('layouts.main')

@section('template_title')
    {{ __('Crear') }} Role
@endsection

@section('panel-content')
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-default">
        <div class="card-header">
          <span class="card-title">{{ __('Crear') }} Role</span>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('roles.store') }}" role="form">
            @csrf
            @include('role.form')
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
