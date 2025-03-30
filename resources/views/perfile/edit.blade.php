@extends('layouts.app')

@section('template_title')
    {{ __('Actualizar') }} Perfil
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Actualizar') }} Perfil</span>
                </div>
                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('perfiles.update', $perfile->id) }}" role="form" enctype="multipart/form-data">
                        @method('PATCH')
                        @csrf
                        @include('perfile.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
