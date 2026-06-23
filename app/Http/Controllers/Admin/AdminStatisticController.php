<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolStatistic;
use Illuminate\Http\Request;

class AdminStatisticController extends Controller
{
    public function index()
    {
        $statistics = SchoolStatistic::latest()->get();

        return view('admin.statistics.index', compact('statistics'));
    }

    public function create()
    {
        return view('admin.statistics.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'total' => 'required|numeric',
        ]);

        SchoolStatistic::create($request->all());

        return redirect()
            ->route('admin.statistics.index')
            ->with('success', 'Statistik berhasil ditambahkan');
    }

    public function edit(SchoolStatistic $statistic)
    {
        return view('admin.statistics.edit', compact('statistic'));
    }

    public function update(Request $request, SchoolStatistic $statistic)
    {
        $request->validate([
            'title' => 'required',
            'total' => 'required|numeric',
        ]);

        $statistic->update($request->all());

        return redirect()
            ->route('admin.statistics.index')
            ->with('success', 'Statistik berhasil diupdate');
    }

    public function destroy(SchoolStatistic $statistic)
    {
        $statistic->delete();

        return redirect()
            ->route('admin.statistics.index')
            ->with('success', 'Statistik berhasil dihapus');
    }
}
