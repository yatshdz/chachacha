@extends('layouts.app')

@section('template_title')
    {{ __('Editar') }} Reserva
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title">{{ __('Editar') }} Reserva</span>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('reservas.update', $reserva->id) }}" role="form">
                        @method('PATCH')
                        @csrf
                        @include('reserva.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
