<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\History;
use App\Models\VisionMission;

class SejarahVisiMisiController extends Controller
{
    public function index()
    {
        $histories = History::latest()->get();

        $visimisi = VisionMission::first();

        return view('frontend.sejarahvisimisi', compact(
            'histories',
            'visimisi'
        ));
    }
}
