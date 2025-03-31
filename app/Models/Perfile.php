<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class Perfile extends Model
{
    protected $collection = 'perfiles';
    protected $primaryKey = '_id';

    protected $fillable = [
        'role_id',       // Relación con la colección 'roles'
        'experiencia',
        'disponibilidad',
        'tarifa_por_hora',
        'calificacion',
        'numero_resenas'
    ];

    protected $casts = [
        'role_id' => 'objectid',
        'disponibilidad' => 'boolean',
        'tarifa_por_hora' => 'float',
        'calificacion' => 'float'
    ];

    // Relación con colección de roles
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', '_id');
    }
    
}