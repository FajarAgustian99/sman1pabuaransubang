<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Principal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminPrincipalController extends Controller
{
    public function index()
    {
        $principals = Principal::latest()->get();

        return view('admin.principals.index', compact('principals'));
    }

    public function create()
    {
        return view('admin.principals.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        $photo = null;

        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('principals', 'public');
        }

        Principal::create([
            'name' => $request->name,
            'position' => $request->position ?? 'Kepala Sekolah',
            'message' => $request->message,
            'photo' => $photo,
            'is_active' => true,
        ]);

        return redirect()
            ->route('admin.principals.index')
            ->with('success', 'Sambutan berhasil ditambahkan');
    }

    public function edit(Principal $principal)
    {
        return view('admin.principals.edit', compact('principal'));
    }

    public function update(Request $request, Principal $principal)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'position' => $request->position,
            'message' => $request->message,
        ];

        if ($request->file('photo')) {

            if ($principal->photo && Storage::disk('public')->exists($principal->photo)) {
                Storage::disk('public')->delete($principal->photo);
            }

            $data['photo'] = $request->file('photo')
                ->store('principals', 'public');
        }

        $principal->update($data);

        return redirect()
            ->route('admin.principals.index')
            ->with('success', 'Sambutan berhasil diupdate');
    }

    public function destroy(Principal $principal)
    {
        if ($principal->photo && Storage::disk('public')->exists($principal->photo)) {
            Storage::disk('public')->delete($principal->photo);
        }

        $principal->delete();

        return redirect()
            ->route('admin.principals.index')
            ->with('success', 'Sambutan berhasil dihapus');
    }
}
