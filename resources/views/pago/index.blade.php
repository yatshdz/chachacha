@extends('layouts.main')

@section('template_title')
    Pagos
@endsection

@section('panel-content')
<div class="container-fluid">
    <div class="row padding-1 p-1">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Pagos') }}
                        </span>
                        <div class="float-right">
                            <a href="{{ route('pagos.create') }}" class="btn btn-primary btn-sm float-right" data-placement="left">
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No.</th>
                                    <th>ID Reserva</th>
                                    <th>ID Cliente</th>
                                    <th>Monto</th>
                                    <th>Estado</th>
                                    <th>Método de Pago</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pagos as $pago)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $pago->id_reserva }}</td>
                                        <td>{{ $pago->id_cliente }}</td>
                                        <td>{{ $pago->monto }}</td>
                                        <td>{{ $pago->estado }}</td>
                                        <td>{{ $pago->metodo_pago }}</td>
                                        <td>
                                            <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary" href="{{ route('pagos.show', $pago->id) }}">
                                                    <i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}
                                                </a>
                                                <a class="btn btn-sm btn-success" href="{{ route('pagos.edit', $pago->id) }}">
                                                    <i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}
                                                </a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro de eliminar este pago?')">
                                                    <i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $pagos->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
