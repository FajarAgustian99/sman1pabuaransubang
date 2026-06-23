@extends('layouts.main')

@section('title', 'Fasilitas & Pengumuman')

@section('content')

<main class="main">

    <!-- PAGE TITLE -->
    <div class="page-title accent-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <div>
                <h1 class="mb-2 mb-lg-0 fw-bold">Fasilitas Sekolah</h1>
            </div>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="current">Fasilitas</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- FACILITIES SECTION -->
    <section id="facilities" class="py-5 bg-white">
        <div class="container">

            <div class="row gy-4">

                @forelse($facilities as $facility)

                <div class="col-lg-4 col-md-6">

                    <div class="facility-item h-100 card border-0 shadow-sm overflow-hidden">

                        <div class="facility-img position-relative overflow-hidden">

                            @if($facility->photo)
                            <img src="{{ asset('storage/'.$facility->photo) }}"
                                class="w-100 d-block asset-image"
                                alt="{{ $facility->name }}">
                            @else
                            <img src="{{ asset('assets/img/default.jpg') }}"
                                class="w-100 d-block asset-image"
                                alt="{{ $facility->name }}">
                            @endif

                            @if($facility->photo)
                            <a href="{{ asset('storage/'.$facility->photo) }}"
                                class="glightbox zoom-icon shadow-sm">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </a>
                            @endif

                        </div>

                        <div class="card-body p-4">

                            <h4 class="fw-bold text-dark mb-3">
                                {{ $facility->name }}
                            </h4>

                            <p class="text-muted small mb-1">
                                {{ $facility->type }}
                            </p>

                            <p class="text-secondary small mb-0">
                                {{ $facility->description }}
                            </p>

                        </div>

                    </div>

                </div>

                @empty

                <div class="col-12 text-center">
                    <div class="alert alert-warning">
                        Data fasilitas belum tersedia.
                    </div>
                </div>

                @endforelse

            </div>

        </div>
    </section>

    <!-- ANNOUNCEMENTS SECTION -->
    <section id="announcement" class="py-5 bg-light">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold text-dark">Informasi & Pengumuman</h2>
                <hr class="w-10 mx-auto border-success border-2 mb-3" style="max-width: 60px;">
                <p class="text-secondary max-width-desc mx-auto">
                    Ikuti informasi terbaru dari sekolah.
                </p>
            </div>

            <div class="row gy-4">

                @forelse($announcements as $item)

                @if($item->is_active)

                <div class="col-lg-4 col-md-6">

                    <div class="card h-100 border-0 shadow-sm overflow-hidden announcement-card bg-white">

                        {{-- IMAGE --}}
                        <div class="position-relative overflow-hidden img-frame">

                            @if($item->image)
                            <img src="{{ asset('storage/'.$item->image) }}"
                                class="w-100 h-100 d-block card-image"
                                alt="{{ $item->title }}">
                            @endif

                            {{-- CATEGORY --}}
                            <span class="position-absolute top-0 start-0 badge bg-primary m-3 px-3 py-2 text-uppercase">
                                {{ $item->category ?? 'Informasi' }}
                            </span>

                        </div>

                        {{-- CONTENT --}}
                        <div class="card-body p-4 d-flex flex-column justify-content-between">

                            <div>

                                {{-- DATE --}}
                                @if($item->announcement_date)
                                <div class="text-muted small mb-2 d-flex align-items-center gap-1">
                                    <i class="bi bi-calendar3"></i>
                                    <span>
                                        {{ \Carbon\Carbon::parse($item->announcement_date)->translatedFormat('d M Y') }}
                                    </span>
                                </div>
                                @endif

                                {{-- TITLE --}}
                                <h5 class="fw-bold text-dark mb-3">
                                    {{ $item->title }}
                                </h5>

                                {{-- DESCRIPTION --}}
                                <p class="text-secondary small">
                                    {{ Str::limit(strip_tags($item->description), 120) }}
                                </p>

                            </div>

                            {{-- BUTTON --}}
                            @if($item->button_text)
                            <a href="{{ route('frontend.announcements.show', $item) }}"
                                class="btn btn-sm w-100 mt-3 rounded-pill btn-{{ $item->button_color ?? 'primary' }}">
                                {{ $item->button_text }}
                            </a>
                            @endif

                        </div>

                    </div>

                </div>

                @endif

                @empty

                <div class="col-12 text-center">
                    <div class="alert alert-warning">
                        Belum ada pengumuman aktif.
                    </div>
                </div>

                @endforelse

            </div>

        </div>
    </section>

</main>

<style>
    /* Card Interactions */
    .facility-item,
    .announcement-card {
        border-radius: 16px !important;
        transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.3s ease;
    }

    .facility-item:hover,
    .announcement-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.1) !important;
    }

    /* Fixed Aspect Ratio Viewports */
    .facility-img .asset-image,
    .img-frame .card-image {
        height: 230px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .facility-item:hover .asset-image,
    .announcement-card:hover .card-image {
        transform: scale(1.04);
    }

    /* Action Layer Elements */
    .zoom-icon {
        position: absolute;
        bottom: 15px;
        right: 15px;
        background: rgba(255, 255, 255, 0.95);
        width: 38px;
        height: 38px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #198754;
        /* Theme accent matching branding */
        text-decoration: none;
        transition: background-color 0.2s, color 0.2s;
    }

    .zoom-icon:hover {
        background: #198754;
        color: #fff;
    }

    /* Fine Text Optimization */
    .max-width-desc {
        max-width: 650px;
    }

    .card-headline {
        font-size: 1.15rem;
        line-height: 1.4;
    }

    .card-text,
    .card-desc {
        line-height: 1.5;
    }

    .tracking-wide {
        letter-spacing: 0.5px;
    }
</style>

@endsection