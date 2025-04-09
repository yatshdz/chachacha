@extends('layouts.main')

@section('template_title')
    Servicios
@endsection

@section('panel-content')
<div class="container-fluid">
  <div class="row padding-1 p-1">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <span id="card_title">
            {{ __('Servicios') }}
          </span>
          <div class="float-right">
            <a href="{{ route('servicios.create') }}" class="btn btn-success btn-sm">
              <i class="fas fa-plus"></i> {{ __('Agregar Servicio') }}
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
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Costo</th>
                  <th>Duración Aprox.</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($servicios as $servicio)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>${{ number_format($servicio->costo, 2) }}</td>
                    <td>{{ $servicio->duracion_aproximada }}</td>
                    <td>
                      <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
                        <a class="btn btn-sm btn-primary" href="{{ route('servicios.show', $servicio->id) }}">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-success" href="{{ route('servicios.edit', $servicio->id) }}">
                          <i class="fa fa-fw fa-edit"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este servicio?')">
                          <i class="fa fa-fw fa-trash"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {!! $servicios->withQueryString()->links() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
