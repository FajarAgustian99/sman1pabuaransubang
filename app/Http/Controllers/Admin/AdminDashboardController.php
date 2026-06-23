<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\HeroSlider;
use App\Models\Principal;
use App\Models\SchoolStatistic;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $totalSliders = HeroSlider::count();
        $totalAnnouncements = Announcement::count();
        $totalStatistics = SchoolStatistic::count();
        $totalPrincipals = Principal::count();
        return view('admin.dashboard', compact('totalSliders', 'totalAnnouncements', 'totalStatistics', 'totalPrincipals'));
    }
}
