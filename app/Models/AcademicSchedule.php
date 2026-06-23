<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AcademicSchedule extends Model
{
    protected $table = 'academic_schedules';

    protected $fillable = [
        'activity',
        'activity_date',
        'description',
        'sort_order',
    ];
}
