<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'cpf',
        'birth_day',
        'emergency_phone',
        'cep',
        'neighborhood',
        'street',
        'number',
        'created_id',
        'professional_id',
        'sannyas',
        'updated_id',
        'type_id',
        'how_did_find_out_id',
        'attachments'
    ];
}
