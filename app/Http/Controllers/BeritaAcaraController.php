<?php

namespace App\Http\Controllers;

use App\Models\News;

class BeritaAcaraController extends Controller
{
    public function index()
    {
        $news = News::where('is_published', true)
            ->latest()
            ->paginate(9);

        return view('frontend.berita.index', compact('news'));
    }

    public function show($slug)
    {
        $news = News::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $latestNews = News::where('is_published', true)
            ->where('id', '!=', $news->id)
            ->latest()
            ->take(5)
            ->get();

        return view('frontend.berita.show', compact('news', 'latestNews'));
    }
}
