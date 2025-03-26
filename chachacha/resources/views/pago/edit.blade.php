@extends('layouts.app')

@section('template_title')
    {{ __('Editar') }} Pago
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Editar') }} Pago</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pagos.update', $pago->id) }}" role="form">
                        @method('PATCH')
                        @csrf
                        @include('pago.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
