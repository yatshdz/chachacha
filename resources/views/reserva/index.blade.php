@extends('layouts.main')

@section('panel-content')
<div class="container mt-4">
    <h1>Lista de Reservas</h1>
    <a href="{{ route('reservas.create') }}" class="btn btn-success mb-3">
        <img src="https://img.icons8.com/ios-filled/20/ffffff/plus-math.png" alt="Agregar" class="me-1">
        Agregar
    </a>
    
    <div class="table-responsive">
        <table class="table table-bordered table-sm">
            <thead class="table-light">
                <tr>
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
                @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->cliente->nombre ?? 'N/A' }}</td>
                    <td>{{ $reserva->trabajador->nombre ?? 'N/A' }}</td>
                    <td>{{ $reserva->servicio->nombre ?? 'N/A' }}</td>
                    <td>{{ \Carbon\Carbon::parse($reserva->fecha)->format('d/m/Y H:i') }}</td>
                    <td>{{ $reserva->duracion ?? 'N/A' }}</td>
                    <td>{{ ucfirst($reserva->estado) }}</td>
                    <td>{{ $reserva->comentarios }}</td>
                    <td>
                        <a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-info btn-sm" title="Ver">
                            <img src="https://img.icons8.com/ios-filled/16/ffffff/visible.png" alt="Ver">
                        </a>
                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-primary btn-sm" title="Editar">
                            <img src="https://img.icons8.com/ios-filled/16/ffffff/edit.png" alt="Editar">
                        </a>
                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline-block;">
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
