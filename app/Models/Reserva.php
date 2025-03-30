<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * Class Reserva
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Reserva extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_cliente',
        'id_trabajador',
        'fecha',
        'duracion',
        'estado',
    ];


}
