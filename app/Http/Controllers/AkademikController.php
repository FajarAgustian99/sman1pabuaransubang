<?php

namespace App\Http\Controllers;

use App\Models\AcademicProgram;
use App\Models\AcademicSchedule;
use App\Models\FeaturedProgram;

class AkademikController extends Controller
{
    public function index()
    {
        $academicPrograms = AcademicProgram::where('is_active', 1)
            ->orderBy('sort_order')
            ->get();

        $academicSchedules = AcademicSchedule::orderBy('activity_date')
            ->get();

        $featuredPrograms = FeaturedProgram::where('is_active', 1)
            ->orderBy('sort_order')
            ->get();

        return view('frontend.akademik', compact(
            'academicPrograms',
            'academicSchedules',
            'featuredPrograms'
        ));
    }
}
