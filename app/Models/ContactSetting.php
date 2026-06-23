<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $fillable = [
        'school_name',
        'address',
        'phone',
        'email',
        'working_hours',
        'google_maps_embed',
    ];
}
