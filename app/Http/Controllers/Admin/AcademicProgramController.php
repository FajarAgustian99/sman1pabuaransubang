<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademicProgram;

class AcademicProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $programs = AcademicProgram::orderBy('sort_order')->get();

        return view('admin.academic-programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.academic-programs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string|max:100',
            'description' => 'required|string',
            'sort_order' => 'nullable|integer',
        ]);

        AcademicProgram::create([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()
            ->route('admin.academic-programs.index')
            ->with('success', 'Program akademik berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $program = AcademicProgram::findOrFail($id);

        return view('admin.academic-programs.edit', compact('program'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $program = AcademicProgram::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'icon' => 'nullable|string|max:100',
            'description' => 'required|string',
            'sort_order' => 'nullable|integer',
        ]);

        $program->update([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
            'sort_order' => $request->sort_order ?? 0,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()
            ->route('admin.academic-programs.index')
            ->with('success', 'Program akademik berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program = AcademicProgram::findOrFail($id);

        $program->delete();

        return redirect()
            ->route('admin.academic-programs.index')
            ->with('success', 'Program akademik berhasil dihapus.');
    }
}
