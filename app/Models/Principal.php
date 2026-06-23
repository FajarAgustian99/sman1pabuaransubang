<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Principal extends Model
{
    protected $fillable = [
        'name',
        'position',
        'message',
        'photo',
        'is_active',
    ];
}
