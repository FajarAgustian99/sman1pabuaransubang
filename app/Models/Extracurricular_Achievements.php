<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extracurricular_Achievements extends Model
{
    protected $table = 'extracurricular_achievements';

    protected $fillable = [
        'title',
        'achievement_year',
        'description',
        'image',
        'sort_order',
        'is_active',
    ];
}
