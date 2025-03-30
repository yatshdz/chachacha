<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * Class Notificacione
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Notificacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_usuario',
        'mensaje',
        'leido',
    ];

}
