<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Trabajadore;
use App\Models\Reserva;
use App\Models\Servicio;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request): View
    {
        // Total de clientes
        $totalClientes = Cliente::count();

        // Total de trabajadores
        $totalTrabajadores = Trabajadore::count();

        // Total de servicios
        $totalServicios = Servicio::count();

        // Total de reservas (sin importar fecha)
        $totalReservas = Reserva::count();

        // Reservas de hoy
        $hoy = Carbon::today();
        $reservasHoy = Reserva::whereDate('fecha', $hoy)->count();

        // Trabajadores disponibles
        $trabajadoresDisponibles = Trabajadore::where('disponibilidad', true)->count();

        return view('home', compact(
            'totalClientes',
            'totalTrabajadores',
            'totalServicios',
            'totalReservas',
            'reservasHoy',
            'trabajadoresDisponibles'
        ));
    }
}
