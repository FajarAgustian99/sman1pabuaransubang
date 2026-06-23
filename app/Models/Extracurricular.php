<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extracurricular extends Model
{
    protected $fillable = [
        'name',
        'category',
        'badge_color',
        'image',
        'description',
        'sort_order',
        'is_active',
    ];
}
