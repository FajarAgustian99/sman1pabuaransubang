<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Extracurricular_Achievements;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExtracurricularAchievementsController extends Controller
{
    public function index()
    {
        $achievements = Extracurricular_Achievements::orderBy('sort_order')
            ->latest()
            ->get();

        return view(
            'admin.extracurricular-achievements.index',
            compact('achievements')
        );
    }

    public function create()
    {
        return view(
            'admin.extracurricular-achievements.create'
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {

            $data['image'] = $request
                ->file('image')
                ->store(
                    'extracurricular-achievements',
                    'public'
                );
        }

        $data['is_active'] =
            $request->has('is_active');

        Extracurricular_Achievements::create($data);

        return redirect()
            ->route(
                'admin.extracurricular-achievements.index'
            )
            ->with(
                'success',
                'Prestasi berhasil ditambahkan.'
            );
    }

    public function show(
        Extracurricular_Achievements $extracurricularAchievement
    ) {
        return view(
            'admin.extracurricular-achievements.show',
            compact('extracurricularAchievement')
        );
    }

    public function edit(
        Extracurricular_Achievements $extracurricularAchievement
    ) {
        return view(
            'admin.extracurricular-achievements.edit',
            compact('extracurricularAchievement')
        );
    }

    public function update(
        Request $request,
        Extracurricular_Achievements $extracurricularAchievement
    ) {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'nullable|image',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {

            if (
                $extracurricularAchievement->image &&
                Storage::disk('public')->exists(
                    $extracurricularAchievement->image
                )
            ) {
                Storage::disk('public')->delete(
                    $extracurricularAchievement->image
                );
            }

            $data['image'] = $request
                ->file('image')
                ->store(
                    'extracurricular-achievements',
                    'public'
                );
        }

        $data['is_active'] =
            $request->has('is_active');

        $extracurricularAchievement
            ->update($data);

        return redirect()
            ->route(
                'admin.extracurricular-achievements.index'
            )
            ->with(
                'success',
                'Prestasi berhasil diperbarui.'
            );
    }

    public function destroy(
        Extracurricular_Achievements $extracurricularAchievement
    ) {
        if (
            $extracurricularAchievement->image &&
            Storage::disk('public')->exists(
                $extracurricularAchievement->image
            )
        ) {
            Storage::disk('public')->delete(
                $extracurricularAchievement->image
            );
        }

        $extracurricularAchievement->delete();

        return back()->with(
            'success',
            'Prestasi berhasil dihapus.'
        );
    }
}
