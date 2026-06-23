<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AdminHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histories = History::latest()->paginate(10);

        return view('admin.histories.index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.histories.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image'
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image')
                ->store('histories', 'public');
        }

        History::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image' => $image
        ]);

        return redirect()
            ->route('admin.histories.index')
            ->with('success', 'Sejarah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        return view('admin.histories.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, History $history)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {

            if ($history->image && Storage::disk('public')->exists($history->image)) {
                Storage::disk('public')->delete($history->image);
            }

            $data['image'] = $request->file('image')
                ->store('histories', 'public');
        }

        $history->update($data);

        return redirect()
            ->route('admin.histories.index')
            ->with('success', 'Data sejarah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        if ($history->image && Storage::disk('public')->exists($history->image)) {
            Storage::disk('public')->delete($history->image);
        }

        $history->delete();

        return redirect()
            ->route('admin.histories.index')
            ->with('success', 'Data sejarah berhasil dihapus.');
    }
}
