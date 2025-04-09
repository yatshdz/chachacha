@extends('layouts.main')

@section('panel-content')
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Panel Cha‑Cha‑Chá!</h1>
  </div>

  <!-- First Row: Totales -->
  <div class="row">
    <!-- Total Clientes -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Total Clientes
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalClientes }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Trabajadores -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Total Trabajadores
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalTrabajadores }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-tie fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Servicios -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                Total Servicios
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalServicios }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-concierge-bell fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Total Reservas -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Total Reservas
              </div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalReservas }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Calificación Promedio Card -->
<div class="col-xl-6 col-md-6 mb-4">
  <div class="card border-left-secondary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
            Calificación Promedio
          </div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
            {{ number_format($calificacionPromedio ?? 10, 1) }}
            <i class="fas fa-star text-warning"></i>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-star fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</div>
@endsection
