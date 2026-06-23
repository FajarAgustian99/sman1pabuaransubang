<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminFacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::orderBy('sort_order')->get();

        return view('admin.facilities.index', compact('facilities'));
    }

    public function create()
    {
        return view('admin.facilities.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'nullable',
            'description' => 'nullable',
            'photo' => 'nullable|image',
            'qty' => 'nullable|integer',
            'sort_order' => 'nullable|integer',
        ]);

        $photo = null;

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('facilities', 'public');
        }

        Facility::create([
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'qty' => $request->qty ?? 1,
            'photo' => $photo,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Facility $facility)
    {
        return view('admin.facilities.edit', compact('facility'));
    }

    public function update(Request $request, Facility $facility)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'nullable',
            'description' => 'nullable',
            'photo' => 'nullable|image',
            'qty' => 'nullable|integer',
            'sort_order' => 'nullable|integer',
        ]);

        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
            'qty' => $request->qty ?? 1,
            'sort_order' => $request->sort_order ?? 0,
        ];

        if ($request->hasFile('photo')) {

            if ($facility->photo) {
                Storage::disk('public')->delete($facility->photo);
            }

            $data['photo'] = $request->file('photo')->store('facilities', 'public');
        }

        $facility->update($data);

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Facility $facility)
    {
        if ($facility->photo) {
            Storage::disk('public')->delete($facility->photo);
        }

        $facility->delete();

        return redirect()
            ->route('admin.facilities.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
