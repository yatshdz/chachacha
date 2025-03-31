@extends('layouts.main')

@section('template_title')
    Perfiles
@endsection

@section('panel-content')
<div class="container-fluid">
    <div class="row padding-1 p-1">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Perfiles') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('perfiles.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
                                {{ __('Crear Nuevo') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success m-4">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="card-body bg-white">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>Trabajador</th>
                                    <th>Experiencia</th>
                                    <th>Tarifa/Hora</th>
                                    <th>Disponibilidad</th>
                                    <th>Calificación</th>
                                    <th>No. Reseñas</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($perfiles as $perfile)
                                        <tr>
                                            <td>{{ $perfile->role->nombre }} {{ $perfile->role->apellido }}</td>
                                            <td>{{ $perfile->experiencia }} años</td>
                                            <td>${{ number_format($perfile->tarifa_por_hora, 2) }}</td>
                                            <td>
                                                @if($perfile->disponibilidad)
                                                    <span class="badge bg-success">Disponible</span>
                                                @else
                                                    <span class="badge bg-secondary">No disponible</span>
                                                @endif
                                            </td>
                                            <td>{{ $perfile->calificacion }}</td>
                                            <td>{{ $perfile->numero_resenas }}</td>
                                            <td>
                                                <a href="{{ route('perfiles.show', $perfile->_id) }}" class="btn btn-sm btn-info">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                                <a href="{{ route('perfiles.edit', $perfile->_id) }}" class="btn btn-sm btn-primary">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="{{ route('perfiles.destroy', $perfile->_id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Está seguro de eliminar este perfil?')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $perfiles->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
