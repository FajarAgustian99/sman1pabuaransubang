<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular;
use App\Models\Extracurricular_Achievements;

class ExtracurricularPageController extends Controller
{
    public function index()
    {
        $extracurriculars = Extracurricular::query()
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->latest('id')
            ->get();

        $achievements = Extracurricular_Achievements::query()
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->latest('id')
            ->get();

        return view('frontend.ekstrakurikuler', [
            'extracurriculars' => $extracurriculars,
            'achievements'     => $achievements,
        ]);
    }
}
