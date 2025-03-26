<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * Class Resena
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Resena extends Model
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
        'id_trabajador',
        'calificacion',
        'comentario',
    ];


}
