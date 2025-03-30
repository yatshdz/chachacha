<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * Class Perfile
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Perfile extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_usuario',
        'experiencia',
        'disponibilidad',
        'tarifa_por_hora',
        'fotos',
        'calificacion',
        'numero_resenas',
    ];


}
