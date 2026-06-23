<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeaderSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderSettingController extends Controller
{
    public function index()
    {
        $header = HeaderSetting::first();

        return view(
            'admin.header-settings.index',
            compact('header')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'school_name'     => 'required|string|max:255',
            'logo'            => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'elearning_text'  => 'required|string|max:100',
            'elearning_url'   => 'nullable|url',
            'ppdb_text'       => 'required|string|max:100',
            'ppdb_url'        => 'nullable|url',
        ]);

        $header = HeaderSetting::first();

        if (!$header) {
            $header = new HeaderSetting();
        }

        if ($request->hasFile('logo')) {

            if (
                $header->logo &&
                Storage::disk('public')->exists($header->logo)
            ) {
                Storage::disk('public')->delete(
                    $header->logo
                );
            }

            $header->logo = $request
                ->file('logo')
                ->store(
                    'header',
                    'public'
                );
        }

        $header->school_name = $request->school_name;
        $header->elearning_text = $request->elearning_text;
        $header->elearning_url = $request->elearning_url;
        $header->ppdb_text = $request->ppdb_text;
        $header->ppdb_url = $request->ppdb_url;

        $header->save();

        return back()->with(
            'success',
            'Pengaturan header berhasil disimpan.'
        );
    }
}
