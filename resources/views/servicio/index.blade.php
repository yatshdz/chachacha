@extends('layouts.main')

@section('panel-content')
<div class="container mt-4">
    <h1>Lista de Servicios</h1>
    <a href="{{ route('servicios.create') }}" class="btn btn-success mb-3">
        <img src="https://img.icons8.com/ios-filled/20/ffffff/plus-math.png" alt="Agregar" class="me-1">
        Agregar
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead class="table-light">
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Costo</th>
                    <th>Duración Aprox.</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                <tr>
                    <td>{{ $servicio->nombre }}</td>
                    <td>{{ $servicio->descripcion }}</td>
                    <td>${{ number_format($servicio->costo, 2) }}</td>
                    <td>{{ $servicio->duracion_aproximada }}</td>
                    <td>
                        <a href="{{ route('servicios.show', $servicio->id) }}" class="btn btn-info btn-sm" title="Ver">
                            <img src="https://img.icons8.com/ios-filled/16/ffffff/visible.png" alt="Ver">
                        </a>
                        <a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary btn-sm" title="Editar">
                            <img src="https://img.icons8.com/ios-filled/16/ffffff/edit.png" alt="Editar">
                        </a>
                        <form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST" style="display:inline-block;">
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
