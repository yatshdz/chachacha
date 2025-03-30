@extends('layouts.main')

@section('template_title', __('Crear Rol')) <!-- Título para la pestaña del navegador -->

@section('panel-content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Crear Nuevo Rol') }}</span> <!-- Título visible en la página -->
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf
                        @include('role.form') <!-- El formulario SIN secciones -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection