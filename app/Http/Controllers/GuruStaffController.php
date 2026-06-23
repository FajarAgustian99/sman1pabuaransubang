<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Teacher;

class GuruStaffController extends Controller
{
    //
    public function index()
    {
        $teachers = Teacher::orderBy('sort_order')->get();

        return view('frontend.guru-staff', compact('teachers'));
    }
}
