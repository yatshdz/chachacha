@extends('layouts.main')

@section('template_title')
    Reservas
@endsection

@section('panel-content')
<div class="container-fluid">
    <div class="row padding-1 p-1">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Reservas') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('reservas.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear Nueva') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No.</th>
                                    <th>ID Cliente</th>
                                    <th>ID Trabajador</th>
                                    <th>Fecha</th>
                                    <th>Duración</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservas as $reserva)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $reserva->id_cliente }}</td>
                                        <td>{{ $reserva->id_trabajador }}</td>
                                        <td>{{ $reserva->fecha }}</td>
                                        <td>{{ $reserva->duracion }}</td>
                                        <td>{{ $reserva->estado }}</td>
                                        <td>
                                            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('reservas.show', $reserva->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('reservas.edit', $reserva->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar esta reserva?')">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $reservas->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
