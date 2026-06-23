<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\HeroSlider;
use App\Models\Principal;
use App\Models\SchoolStatistic;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = HeroSlider::where('is_active', true)->get();

        $statistics = SchoolStatistic::all();

        $announcements = Announcement::where('is_active', true)
            ->latest()
            ->take(3)
            ->get();

        $principal = Principal::latest()->first();


        return view('frontend.home', compact(
            'sliders',
            'statistics',
            'announcements',
            'principal'
        ));
    }
}
