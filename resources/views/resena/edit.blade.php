@extends('layouts.main')

@section('template_title')
    {{ __('Editar') }} Reseña
@endsection

@section('panel-content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Editar') }} Reseña</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('resenas.update', $resena->id) }}" role="form">
                        @method('PATCH')
                        @csrf
                        @include('resena.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
