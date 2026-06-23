<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeaturedProgram;
use Illuminate\Support\Facades\Storage;

class FeaturedProgramController extends Controller
{
    public function index()
    {
        $programs = FeaturedProgram::latest()->get();
        return view('admin.featured-programs.index', compact('programs'));
    }

    public function create()
    {
        return view('admin.featured-programs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('featured-programs', 'public');
        }

        FeaturedProgram::create($data);

        return redirect()->route('admin.featured-programs.index')
            ->with('success', 'Program unggulan berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $program = FeaturedProgram::findOrFail($id);
        return view('admin.featured-programs.edit', compact('program'));
    }

    public function update(Request $request, string $id)
    {
        $program = FeaturedProgram::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $data = $request->only(['title', 'description']);

        if ($request->hasFile('image')) {

            // hapus lama
            if ($program->image) {
                Storage::disk('public')->delete($program->image);
            }

            $data['image'] = $request->file('image')->store('featured-programs', 'public');
        }

        $program->update($data);

        return redirect()->route('admin.featured-programs.index')
            ->with('success', 'Program berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $program = FeaturedProgram::findOrFail($id);

        if ($program->image) {
            Storage::disk('public')->delete($program->image);
        }

        $program->delete();

        return back()->with('success', 'Program berhasil dihapus');
    }
}
