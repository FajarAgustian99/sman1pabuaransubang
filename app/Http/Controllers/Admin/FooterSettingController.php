<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FooterSetting;
use Illuminate\Http\Request;

class FooterSettingController extends Controller
{
    public function index()
    {
        $footer = FooterSetting::first();

        return view(
            'admin.footer-settings.index',
            compact('footer')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_name' => 'required'
        ]);

        FooterSetting::updateOrCreate(
            ['id' => 1],
            $request->all()
        );

        return back()->with(
            'success',
            'Footer berhasil diperbarui'
        );
    }
}
