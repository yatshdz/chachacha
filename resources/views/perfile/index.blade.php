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
                                    <th>ID Usuario</th>
                                    <th>Experiencia</th>
                                    <th>Disponibilidad</th>
                                    <th>Tarifa por Hora</th>
                                    <th>Calificación</th>
                                    <th>Número de Reseñas</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($perfiles as $perfil)
                                    <tr>
                                        <td>{{ $perfil->id_usuario }}</td>
                                        <td>{{ $perfil->experiencia }}</td>
                                        <td>{{ $perfil->disponibilidad }}</td>
                                        <td>{{ $perfil->tarifa_por_hora }}</td>
                                        <td>{{ $perfil->calificacion }}</td>
                                        <td>{{ $perfil->numero_resenas }}</td>
                                        <td>
                                            <form action="{{ route('perfiles.destroy', $perfil->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('perfiles.show', $perfil->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('perfiles.edit', $perfil->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar este perfil?')">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
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
