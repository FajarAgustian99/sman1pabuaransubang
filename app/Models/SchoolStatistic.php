<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolStatistic extends Model
{
    protected $fillable = [
        'title',
        'total',
        'icon',
        'color',
        'is_active',
    ];
}
