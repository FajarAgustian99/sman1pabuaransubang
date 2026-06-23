<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminOrganizationController extends Controller
{
    public function index()
    {
        $organizations = Organization::orderBy('sort_order')->get();

        return view(
            'admin.organizations.index',
            compact('organizations')
        );
    }

    public function create()
    {
        return view('admin.organizations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'position' => 'required',
            'name' => 'required',
            'photo' => 'nullable|image',
            'sort_order' => 'nullable|integer'
        ]);

        $photo = null;

        if ($request->hasFile('photo')) {
            $photo = $request
                ->file('photo')
                ->store('organizations', 'public');
        }

        Organization::create([
            'position' => $request->position,
            'name' => $request->name,
            'photo' => $photo,
            'sort_order' => $request->sort_order ?? 0,
        ]);

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function edit(Organization $organization)
    {
        return view(
            'admin.organizations.edit',
            compact('organization')
        );
    }

    public function update(Request $request, Organization $organization)
    {
        $request->validate([
            'position' => 'required',
            'name' => 'required',
            'photo' => 'nullable|image',
            'sort_order' => 'nullable|integer'
        ]);

        $data = [
            'position' => $request->position,
            'name' => $request->name,
            'sort_order' => $request->sort_order ?? 0,
        ];

        if ($request->hasFile('photo')) {

            if ($organization->photo) {
                Storage::disk('public')
                    ->delete($organization->photo);
            }

            $data['photo'] = $request
                ->file('photo')
                ->store('organizations', 'public');
        }

        $organization->update($data);

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(Organization $organization)
    {
        if ($organization->photo) {
            Storage::disk('public')
                ->delete($organization->photo);
        }

        $organization->delete();

        return redirect()
            ->route('admin.organizations.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
