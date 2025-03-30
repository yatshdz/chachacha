<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

/**
 * Class Role
 *
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Role extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'rol',
        'verificado',
    ];


}
