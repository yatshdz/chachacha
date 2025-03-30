@extends('layouts.main')

@section('template_title')
    Notificaciones
@endsection

@section('panel-content')
<div class="container-fluid">
    <div class="row padding-1 p-1">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title">
                        {{ __('Notificaciones') }}
                    </span>
                    <div class="float-right">
                        <a href="{{ route('notificaciones.create') }}" class="btn btn-primary btn-sm">
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
                                    <th>ID Usuario</th>
                                    <th>Mensaje</th>
                                    <th>Leído</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($notificaciones as $notificacion)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $notificacion->id_usuario }}</td>
                                        <td>{{ $notificacion->mensaje }}</td>
                                        <td>{{ $notificacion->leido ? 'Sí' : 'No' }}</td>
                                        <td>
                                            <form action="{{ route('notificaciones.destroy', $notificacion->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('notificaciones.show', $notificacion->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('notificaciones.edit', $notificacion->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar esta notificación?')">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $notificaciones->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
