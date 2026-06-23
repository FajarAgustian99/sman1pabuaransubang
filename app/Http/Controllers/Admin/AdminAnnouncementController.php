<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::latest()->get();

        return view('admin.announcements.index', compact('announcements'));
    }

    public function create()
    {
        return view('admin.announcements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'announcement_date' => 'required|date',
        ]);

        $image = null;

        if ($request->file('image')) {
            $image = $request->file('image')->store('announcements', 'public');
        }

        Announcement::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'category' => $request->category,
            'button_text' => $request->button_text ?? 'Lihat',
            'button_color' => $request->button_color ?? 'primary',
            'announcement_date' => $request->announcement_date,
            'is_active' => true,
        ]);

        return redirect()
            ->route('admin.announcements.index')
            ->with('success', 'Pengumuman berhasil ditambahkan');
    }

    public function edit(Announcement $announcement)
    {
        return view('admin.announcements.edit', compact('announcement'));
    }

    public function update(Request $request, Announcement $announcement)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|max:2048',
            'announcement_date' => 'required|date',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'button_text' => $request->button_text,
            'button_color' => $request->button_color,
            'announcement_date' => $request->announcement_date,
        ];

        if ($request->file('image')) {

            if ($announcement->image && Storage::disk('public')->exists($announcement->image)) {
                Storage::disk('public')->delete($announcement->image);
            }

            $data['image'] = $request->file('image')
                ->store('announcements', 'public');
        }

        $announcement->update($data);

        return redirect()
            ->route('admin.announcements.index')
            ->with('success', 'Pengumuman berhasil diupdate');
    }

    public function destroy(Announcement $announcement)
    {
        if ($announcement->image && Storage::disk('public')->exists($announcement->image)) {
            Storage::disk('public')->delete($announcement->image);
        }

        $announcement->delete();

        return redirect()
            ->route('admin.announcements.index')
            ->with('success', 'Pengumuman berhasil dihapus');
    }
}
