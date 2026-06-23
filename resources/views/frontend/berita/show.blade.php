@extends('layouts.main')

@section('title', $news->title)

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">

        <div class="heading">
            <div class="container">

                <div class="row justify-content-center text-center">

                    <div class="col-lg-8">

                        <h1>{{ $news->title }}</h1>

                        <p class="mb-0">
                            Dipublikasikan pada
                            {{ $news->created_at->translatedFormat('d F Y') }}
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <nav class="breadcrumbs">

            <div class="container">

                <ol>
                    <li>
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.berita.index') }}">
                            Berita
                        </a>
                    </li>

                    <li class="current">
                        {{ Str::limit($news->title, 40) }}
                    </li>
                </ol>

            </div>

        </nav>

    </div>

    <!-- Detail Berita -->
    <section class="section py-5">

        <div class="container">

            <div class="row">

                <!-- Content -->
                <div class="col-lg-8">

                    <article class="news-detail">

                        @if($news->image)

                        <img
                            src="{{ asset('storage/' . $news->image) }}"
                            alt="{{ $news->title }}"
                            class="img-fluid rounded shadow-sm mb-4 w-100">

                        @endif

                        <div class="mb-4">

                            <span class="badge bg-primary">
                                Berita Sekolah
                            </span>

                            <span class="text-muted ms-2">
                                <i class="bi bi-calendar-event"></i>
                                {{ $news->created_at->translatedFormat('d F Y') }}
                            </span>

                        </div>

                        <h2 class="mb-4">
                            {{ $news->title }}
                        </h2>

                        <div class="news-content">

                            {!! $news->content !!}

                        </div>

                    </article>

                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">

                    <div class="card shadow-sm border-0">

                        <div class="card-header bg-primary text-white">
                            Berita Terbaru
                        </div>

                        <div class="card-body">

                            @forelse($latestNews as $item)

                            <div class="mb-3">

                                <a href="{{ route('frontend.berita.show', $item->slug) }}"
                                    class="text-decoration-none">

                                    <h6 class="mb-1">
                                        {{ $item->title }}
                                    </h6>

                                </a>

                                <small class="text-muted">
                                    {{ $item->created_at->translatedFormat('d F Y') }}
                                </small>

                            </div>

                            @if(!$loop->last)
                            <hr>
                            @endif

                            @empty

                            <p class="text-muted mb-0">
                                Belum ada berita lainnya.
                            </p>

                            @endforelse

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<style>
    .news-detail {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
    }

    .news-detail h2 {
        font-weight: 700;
    }

    .news-content {
        line-height: 1.9;
        font-size: 16px;
        color: #444;
    }

    .news-content img {
        max-width: 100%;
        height: auto;
        border-radius: 10px;
    }

    .news-content p {
        margin-bottom: 1rem;
    }
</style>

@endsection