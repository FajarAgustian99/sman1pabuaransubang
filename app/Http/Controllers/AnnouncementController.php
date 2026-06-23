<?php

namespace App\Http\Controllers;

use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()->paginate(10);

        return view('frontend.announcements.index', compact('announcements'));
    }

    public function show($slug)
    {
        $announcement = Announcement::where('slug', $slug)->firstOrFail();

        return view('frontend.announcements.show', compact('announcement'));
    }
}
