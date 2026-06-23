<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExtracurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $extracurriculars = Extracurricular::orderBy('sort_order', 'asc')
            ->latest()
            ->get();

        return view(
            'admin.extracurriculars.index',
            compact('extracurriculars')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.extracurriculars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'coach'       => 'nullable|string|max:255',
            'schedule'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->except('image');

        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {
            $data['image'] = $request
                ->file('image')
                ->store('extracurriculars', 'public');
        }

        Extracurricular::create($data);

        return redirect()
            ->route('admin.extracurriculars.index')
            ->with(
                'success',
                'Data ekstrakurikuler berhasil ditambahkan.'
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(Extracurricular $extracurricular)
    {
        return view(
            'admin.extracurriculars.show',
            compact('extracurricular')
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Extracurricular $extracurricular)
    {
        return view(
            'admin.extracurriculars.edit',
            compact('extracurricular')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        Request $request,
        Extracurricular $extracurricular
    ) {
        $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'coach'       => 'nullable|string|max:255',
            'schedule'    => 'nullable|string|max:255',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'sort_order'  => 'nullable|integer',
        ]);

        $data = $request->except('image');

        $data['is_active'] = $request->has('is_active');

        if ($request->hasFile('image')) {

            if (
                $extracurricular->image &&
                Storage::disk('public')->exists(
                    $extracurricular->image
                )
            ) {
                Storage::disk('public')->delete(
                    $extracurricular->image
                );
            }

            $data['image'] = $request
                ->file('image')
                ->store('extracurriculars', 'public');
        }

        $extracurricular->update($data);

        return redirect()
            ->route('admin.extracurriculars.index')
            ->with(
                'success',
                'Data ekstrakurikuler berhasil diperbarui.'
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Extracurricular $extracurricular
    ) {
        if (
            $extracurricular->image &&
            Storage::disk('public')->exists(
                $extracurricular->image
            )
        ) {
            Storage::disk('public')->delete(
                $extracurricular->image
            );
        }

        $extracurricular->delete();

        return redirect()
            ->route('admin.extracurriculars.index')
            ->with(
                'success',
                'Data ekstrakurikuler berhasil dihapus.'
            );
    }
}
