<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterSetting extends Model
{
    protected $fillable = [
        'school_name',
        'description',
        'address',
        'phone',
        'email',
        'working_hours',
        'facebook',
        'instagram',
        'youtube',
        'copyright_year',
        'copyright_name',
    ];
}
