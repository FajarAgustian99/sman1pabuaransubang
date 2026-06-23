<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Announcement;

class FasilitasController extends Controller
{
    public function index()
    {
        $facilities = Facility::orderBy('sort_order')->get();
        $announcements = Announcement::latest()->take(6)->get();

        return view('frontend.fasilitas', compact(
            'facilities',
            'announcements'
        ));
    }
}
