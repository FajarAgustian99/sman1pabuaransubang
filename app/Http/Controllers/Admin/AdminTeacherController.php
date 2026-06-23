<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminTeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('sort_order')->get();

        return view(
            'admin.teachers.index',
            compact('teachers')
        );
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'subject' => 'nullable',
            'photo' => 'nullable|image',
            'sort_order' => 'nullable|integer'
        ]);

        $photo = null;

        if ($request->hasFile('photo')) {
            $photo = $request
                ->file('photo')
                ->store('teachers', 'public');
        }

        Teacher::create([
            'name' => $request->name,
            'position' => $request->position,
            'subject' => $request->subject,
            'photo' => $photo,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()
            ->route('admin.teachers.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Teacher $teacher)
    {
        return view(
            'admin.teachers.edit',
            compact('teacher')
        );
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'subject' => 'nullable',
            'photo' => 'nullable|image',
            'sort_order' => 'nullable|integer'
        ]);

        $data = [
            'name' => $request->name,
            'position' => $request->position,
            'subject' => $request->subject,
            'sort_order' => $request->sort_order ?? 0,
        ];

        if ($request->hasFile('photo')) {

            if ($teacher->photo) {
                Storage::disk('public')
                    ->delete($teacher->photo);
            }

            $data['photo'] = $request
                ->file('photo')
                ->store('teachers', 'public');
        }

        $teacher->update($data);

        return redirect()
            ->route('admin.teachers.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Teacher $teacher)
    {
        if ($teacher->photo) {
            Storage::disk('public')
                ->delete($teacher->photo);
        }

        $teacher->delete();

        return redirect()
            ->route('admin.teachers.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
