<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataRows extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'data_type_id',
        'field',
        'type',
        'display_name',
        'required',
        'browse',
        'read',
        'edit',
        'add',
        'delete',
        'details',
        'order'
    ];
}
