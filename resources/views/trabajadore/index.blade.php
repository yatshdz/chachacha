@extends('layouts.main')

@section('panel-content')
    <div class="container">
        <h1>Lista de Trabajadores</h1>
        <a href="{{ route('trabajadores.create') }}" class="btn btn-success mb-3">
            <img src="https://img.icons8.com/ios-filled/20/ffffff/plus-math.png" alt="Agregar" class="me-1">
            Agregar
        </a>

        <!-- Contenedor responsive -->
        <div class="table-responsive">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
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
                    @foreach($trabajadores as $trabajador)
                    <tr>
                        <td>{{ $trabajador->nombre }} {{ $trabajador->apellido }}</td>
                        <td>{{ $trabajador->disponibilidad }}</td>
                        <td>${{ $trabajador->tarifa_por_hora }}</td>
                        <td>{{ $trabajador->experiencia }}</td>
                        <td>{{ $trabajador->especialidad }}</td>
                        <td>{{ $trabajador->email }}</td>
                        <td>
                            <a href="{{ route('trabajadores.show', $trabajador->id) }}" class="btn btn-info btn-sm" title="Ver">
                                <img src="https://img.icons8.com/ios-filled/16/ffffff/visible.png" alt="Ver">
                            </a>
                            <a href="{{ route('trabajadores.edit', $trabajador->id) }}" class="btn btn-primary btn-sm" title="Editar">
                                <img src="https://img.icons8.com/ios-filled/16/ffffff/edit.png" alt="Editar">
                            </a>
                            <form action="{{ route('trabajadores.destroy', $trabajador->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Está seguro?')" class="btn btn-danger btn-sm" title="Eliminar">
                                    <img src="https://img.icons8.com/ios-filled/16/ffffff/delete.png" alt="Eliminar">
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
