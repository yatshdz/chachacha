@extends('layouts.main')

@section('template_title')
    Trabajadores
@endsection

@section('panel-content')
<div class="container-fluid">
  <div class="row padding-1 p-1">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <span id="card_title">
            {{ __('Trabajadores') }}
          </span>
          <div class="float-right">
            <a href="{{ route('trabajadores.create') }}" class="btn btn-success btn-sm">
              <i class="fas fa-plus"></i> {{ __('Agregar Trabajador') }}
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
                  <th>Trabajador</th>
                  <th>Disponible</th>
                  <th>Tarifa/Hora</th>
                  <th>Experiencia</th>
                  <th>Especialidad</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($trabajadores as $trabajador)
                  <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $trabajador->nombre }} {{ $trabajador->apellido }}</td>
                    <td>{{ $trabajador->disponibilidad ? 'Sí' : 'No' }}</td>
                    <td>${{ number_format($trabajador->tarifa_por_hora, 2) }}</td>
                    <td>{{ $trabajador->experiencia }}</td>
                    <td>{{ $trabajador->especialidad }}</td>
                    <td>{{ $trabajador->email }}</td>
                    <td>
                      <form action="{{ route('trabajadores.destroy', $trabajador->id) }}" method="POST">
                        <a class="btn btn-sm btn-primary" href="{{ route('trabajadores.show', $trabajador->id) }}">
                          <i class="fa fa-fw fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-success" href="{{ route('trabajadores.edit', $trabajador->id) }}">
                          <i class="fa fa-fw fa-edit"></i>
                        </a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este trabajador?')">
                          <i class="fa fa-fw fa-trash"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            {!! $trabajadores->withQueryString()->links() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
