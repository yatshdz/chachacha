@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Pago
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Crear') }} Pago</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pagos.store') }}" role="form">
                        @csrf
                        @include('pago.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
