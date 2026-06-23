<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VisionMission;
use Illuminate\Http\Request;
use App\Models\History;

class VisionMissionController extends Controller
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

    public function create()
    {
        return view('admin.visimisi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'vision' => 'required',
            'mission' => 'required',
        ]);

        VisionMission::create($request->all());

        return redirect()
            ->route('admin.visimisi.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(VisionMission $visimisi)
    {
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, VisionMission $visimisi)
    {
        $request->validate([
            'vision' => 'required',
            'mission' => 'required',
        ]);

        $visimisi->update($request->all());

        return redirect()
            ->route('admin.visimisi.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(VisionMission $visimisi)
    {
        $visimisi->delete();

        return redirect()
            ->route('admin.visimisi.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
