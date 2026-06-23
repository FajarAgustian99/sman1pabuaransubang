<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeaderSetting extends Model
{
    protected $fillable = [
        'school_name',
        'logo',
        'elearning_text',
        'elearning_url',
        'ppdb_text',
        'ppdb_url',
        'is_active',
    ];
}
