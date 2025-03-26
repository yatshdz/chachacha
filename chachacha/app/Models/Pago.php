<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * Class Pago
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pago extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_reserva',
        'id_cliente',
        'monto',
        'estado',
        'metodo_pago',
    ];


}
