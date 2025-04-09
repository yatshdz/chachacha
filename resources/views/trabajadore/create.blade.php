@extends('layouts.main')

@section('template_title')
    Crear Trabajador
@endsection

@section('panel-content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Crear Trabajador</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('trabajadores.store') }}" role="form" enctype="multipart/form-data">
                @csrf
                @include('trabajadore.form')
            </form>
        </div>
    </div>
</div>
@endsection
