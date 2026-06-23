<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AcademicSchedule;

class AcademicScheduleController extends Controller
{
    public function index()
    {
        $schedules = AcademicSchedule::orderBy('sort_order', 'asc')
            ->orderBy('activity_date', 'asc')
            ->get();

        return view('admin.academic-schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('admin.academic-schedules.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'activity' => 'required|string|max:255',
            'activity_date' => 'required|date',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        AcademicSchedule::create($validated);

        return redirect()
            ->route('admin.academic-schedules.index')
            ->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $schedule = AcademicSchedule::findOrFail($id);

        return view('admin.academic-schedules.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $schedule = AcademicSchedule::findOrFail($id);

        $validated = $request->validate([
            'activity' => 'required|string|max:255',
            'activity_date' => 'required|date',
            'description' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        $schedule->update($validated);

        return redirect()
            ->route('admin.academic-schedules.index')
            ->with('success', 'Jadwal berhasil diupdate');
    }

    public function destroy($id)
    {
        AcademicSchedule::destroy($id);

        return back()->with('success', 'Jadwal berhasil dihapus');
    }
}
