@extends('layouts.main')

@section('template_title')
    Reseñas
@endsection

@section('panel-content')
<div class="container-fluid">
    <div class="row padding-1 p-1">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title">
                        {{ __('Reseñas') }}
                    </span>
                    <div class="float-right">
                        <a href="{{ route('resenas.create') }}" class="btn btn-primary btn-sm">
                            {{ __('Crear Nueva') }}
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
                                    <th>ID Reserva</th>
                                    <th>ID Cliente</th>
                                    <th>ID Trabajador</th>
                                    <th>Calificación</th>
                                    <th>Comentario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resenas as $resena)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $resena->id_reserva }}</td>
                                        <td>{{ $resena->id_cliente }}</td>
                                        <td>{{ $resena->id_trabajador }}</td>
                                        <td>{{ $resena->calificacion }}</td>
                                        <td>{{ $resena->comentario }}</td>
                                        <td>
                                            <form action="{{ route('resenas.destroy', $resena->_id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('resenas.show', $resena->_id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('resenas.edit', $resena->_id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar esta reseña?')">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $resenas->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
