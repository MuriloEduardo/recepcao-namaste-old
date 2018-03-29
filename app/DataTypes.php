<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTypes extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'slug',
        'display_name_singular',
        'display_name_plural',
        'icon',
        'model_name',
        'policy_name',
        'controller',
        'description',
        'generate_permissions',
        'server_side'
    ];
}
