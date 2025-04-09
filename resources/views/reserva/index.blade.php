@extends('layouts.main')

@section('template_title')
    Reservas
@endsection

@section('panel-content')
<div class="container-fluid">
  <div class="row padding-1 p-1">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <span id="card_title">
            {{ __('Reservas') }}
          </span>
          <div class="float-right">
            <a href="{{ route('reservas.create') }}" class="btn btn-success btn-sm">
              <i class="fas fa-plus"></i> {{ __('Agregar Reserva') }}
            </a>
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
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Cliente</th>
                  <th>Trabajador</th>
                  <th>Servicio</th>
                  <th>Fecha</th>
                  <th>Duración</th>
                  <th>Estado</th>
                  <th>Comentarios</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($reservas as $reserva)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $reserva->cliente->nombre ?? 'N/A' }}</td>
                    <td>{{ $reserva->trabajador->nombre ?? 'N/A' }}</td>
                    <td>{{ $reserva->servicio->nombre ?? 'N/A' }}</td>
                    <td>{{ \Carbon\Carbon::parse($reserva->fecha)->format('d/m/Y H:i') }}</td>
                    <td>{{ $reserva->duracion }}</td>
                    <td>{{ ucfirst($reserva->estado) }}</td>
                    <td>{{ $reserva->comentarios }}</td>
                    <td>
                      <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST">
                        <a class="btn btn-sm btn-primary" href="{{ route('reservas.show', $reserva->id) }}">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-success" href="{{ route('reservas.edit', $reserva->id) }}">
                          <i class="fa fa-fw fa-edit"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar esta reserva?')">
                          <i class="fa fa-fw fa-trash"></i>
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
