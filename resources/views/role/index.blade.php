@extends('layouts.main')

@section('template_title')
    Roles
@endsection

@section('panel-content')
<div class="container-fluid">
    <div class="row padding-1 p-1">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span id="card_title">
                        {{ __('Roles') }}
                    </span>
                    <div class="float-right">
                        <a href="{{ route('roles.create') }}" class="btn btn-primary btn-sm">
                            {{ __('Crear Nuevo') }}
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
                          <th>User ID</th>
                          <th>Rol</th>
                          <th>Verificado</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($roles as $role)
                          <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $role->user_id }}</td>
                            <td>{{ $role->rol }}</td>
                            <td>{{ $role->verificado ? 'Sí' : 'No' }}</td>
                            <td>
                              <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                <a class="btn btn-sm btn-primary" href="{{ route('roles.show', $role->id) }}">
                                  <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                </a>
                                <a class="btn btn-sm btn-success" href="{{ route('roles.edit', $role->id) }}">
                                  <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este rol?')">
                                  <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                </button>
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {!! $roles->withQueryString()->links() !!}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
