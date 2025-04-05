@extends('layouts.main')

@section('template_title')
    {{ __('Update') }} Trabajadore
@endsection

@section('panel-content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Trabajadore</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('trabajadores.update', $trabajadore->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('trabajadore.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
