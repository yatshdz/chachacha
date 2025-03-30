@extends('layouts.main')

@section('template_title')
    {{ __('Crear') }} Perfil
@endsection

@section('panel-content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Crear') }} Perfil</span>
                </div>
                <div class="card-body bg-white">
                    <form method="POST" action="{{ route('perfiles.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @include('perfile.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
