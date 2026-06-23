<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeroSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminHeroSliderController extends Controller
{
    public function index()
    {
        $sliders = HeroSlider::latest()->get();
        return view('admin.sliders.index', compact('sliders'));
    }
    public function create()
    {
        return view('admin.sliders.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'nullable',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $image = $request->file('image')->store('sliders', 'public');

        HeroSlider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' => $image,
            'is_active' => true,
        ]);

        return redirect()
            ->route('admin.sliders.index')
            ->with('success', 'Slider berhasil ditambahkan');
    }
    public function edit(HeroSlider $slider)
    {
        return view('admin.sliders.edit', compact('slider'));
    }
    public function update(Request $request, HeroSlider $slider)
    {
        $request->validate([
            'title' => 'required|max:255',
            'subtitle' => 'nullable',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        if ($request->hasFile('image')) {
            if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                Storage::disk('public')->delete($slider->image);
            }
            $image = $request->file('image')->store('sliders', 'public');
            $slider->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'image' => $image,
            ]);
        } else {
            $slider->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
            ]);
        }

        return redirect()
            ->route('admin.sliders.index')
            ->with('success', 'Slider berhasil diperbarui');
    }
    public function destroy(HeroSlider $slider)
    {
        if ($slider->image && Storage::disk('public')->exists($slider->image)) {
            Storage::disk('public')->delete($slider->image);
        }
        $slider->delete();
        return redirect()->route('admin.sliders.index')->with('success', 'Slider berhasil dihapus');
    }
}
