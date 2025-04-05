<?php

namespace App\Models;

use MongoDb\Laravel\Eloquent\Model;

/**
 * Class Trabajadore
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Trabajadore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'disponibilidad',
        'tarifa_por_hora',
        'experiencia',
        'especialidad',
        'email'
    ];

}
