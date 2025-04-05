<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Reserva extends Model
{
    
    protected $perPage = 20;

    protected $fillable = [
        'id_cliente',
        'id_trabajador',
        'id_servicio',
        'fecha',
        'duracion',
        'estado',
        'comentarios',
    ];

    // Relaciones para obtener el nombre en las vistas
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'id_cliente', '_id');
    }

    public function trabajador()
    {
        return $this->belongsTo(Trabajadore::class, 'id_trabajador', '_id');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class, 'id_servicio', '_id');
    }

}
