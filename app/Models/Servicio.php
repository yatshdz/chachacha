<?php

namespace App\Models;

use MongoDb\Laravel\Eloquent\Model;

class Servicio extends Model
{
    
    protected $perPage = 20;

    protected $fillable = [
        'nombre',
        'descripcion',
        'costo',
        'duracion_aproximada',
    ];

}
