<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'position',
        'name',
        'photo',
        'sort_order'
    ];
}
