@extends('layouts.main')

@section('title', 'Beranda')

@section('content')

<main class="main">

    <section id="hero" class="hero section dark-background position-relative overflow-hidden">
        <div class="swiper hero-slider init-swiper">
            <div class="swiper-wrapper">

                @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <img src="{{ asset('storage/' . $slider->image) }}"
                        class="hero-img-filter"
                        alt="{{ $slider->title }}">
                </div>
                @endforeach

            </div>

            <div class="swiper-pagination"></div>

            <script type="application/json" class="swiper-config">
                {
                    "loop": true,
                    "speed": 1000,
                    "autoplay": {
                        "delay": 4000
                    },
                    "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                    }
                }
            </script>
        </div>
        </div>

        <div class="hero-container container">
            <div class="hero-glass-box p-4 p-md-2 rounded-4 animate__animated animate__fadeInUp">
                <h2 class="text-white display-4 fw-bold mb-3">
                    {{ $sliders->first()->title ?? 'Membangun Masa Depan Gemilang' }}
                </h2>
                <p class="text-white-50 fs-4 mb-4">
                    {{ $sliders->first()->subtitle ?? 'Selamat Datang di Website Resmi SMAN 1 Pabuaran Subang' }}
                </p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#about" class="btn-get-started px-4 py-2 rounded-pill">
                        Jelajahi Profil
                    </a>
                    <!-- <a href="https://www.youtube.com/watch?v=your-video-id" class="glightbox btn-watch-video d-flex align-items-center text-white text-decoration-none">
                        <i class="bi bi-play-circle-fill fs-1 me-2 text-success"></i>
                        <span>Video Profil</span>
                    </a> -->
                </div>
            </div>
        </div>
    </section>

    <section id="counts" class="section counts light-background py-5">
        <div class="container">
            <div class="row gy-4">
                @foreach ($statistics as $stat)
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center p-4 bg-white shadow-sm border-bottom border-{{ $stat->color }} border-4 rounded-4 h-100 transition-hover">
                        <span class="purecounter fs-1 fw-extrabold d-block text-dark"
                            data-purecounter-start="0"
                            data-purecounter-end="{{ $stat->total }}">
                        </span>
                        <p class="mb-0 fw-bold text-uppercase small tracking-wider text-muted">
                            {{ $stat->title }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="announcement" class="section py-5 bg-light">
        <div class="container">
            <div class="section-title text-center mb-5">
                <h2 class="fw-bold display-6">Pengumuman <span class="text-success">Terbaru</span></h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">
                    Dapatkan informasi terkini mengenai agenda sekolah, akademik, dan pengumuman penting lainnya.
                </p>
            </div>

            <div class="row gy-4">
                @forelse ($announcements as $announcement)
                <div class="col-lg-4 col-md-6">
                    <div class="announcement-card h-100 border-0 shadow-sm">
                        <div class="announcement-badge bg-{{ $announcement->button_color }}">
                            {{ $announcement->category }}
                        </div>
                        <img src="{{ asset('storage/' . $announcement->image) }}" class="img-fluid" alt="{{ $announcement->title }}">
                        <div class="announcement-content">
                            <div class="announcement-date mb-2 text-success fw-bold">
                                <i class="bi bi-calendar3 me-2"></i>
                                {{ \Carbon\Carbon::parse($announcement->announcement_date)->translatedFormat('d M Y') }}
                            </div>
                            <h3 class="h5 mb-3">{{ $announcement->title }}</h3>
                            <p class="small text-secondary mb-4">
                                {{ Str::limit($announcement->description, 100) }}
                            </p>
                            <a href="{{ route('frontend.announcements.show', $announcement->slug) }}" class="btn btn-{{ $announcement->button_color }} w-100 rounded-pill">
                                {{ $announcement->button_text }}
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="alert alert-info text-center">Belum ada pengumuman terbaru.</div>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <section id="why-us" class="section why-us py-5">
        <div class="container">
            <div class="row gy-4 align-items-stretch">
                <div class="col-lg-4">
                    <div class="why-box bg-success p-5 text-white h-100 rounded-4 shadow">
                        <h3 class="fw-bold">Kenapa SMAN 1 Pabuaran?</h3>
                        <p class="opacity-75 my-4">
                            Mewujudkan generasi yang religius, cerdas, dan siap menghadapi tantangan masa depan dengan kurikulum berbasis teknologi.
                        </p>
                        <a href="{{ route('frontend.profil.sejarahvisimisi') }}" class="btn btn-light rounded-pill px-4">
                            Lihat Visi Misi <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gy-4 h-100">
                        <div class="col-md-4">
                            <div class="icon-box p-4 text-center shadow-sm h-100 bg-white rounded-4 transition-hover">
                                <div class="icon-circle mb-3 mx-auto bg-light-success"><i class="bi bi-mortarboard fs-2 text-success"></i></div>
                                <h5 class="fw-bold">Akreditasi A</h5>
                                <p class="small text-muted">Lembaga pendidikan dengan standar kualitas nasional tertinggi.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box p-4 text-center shadow-sm h-100 bg-white rounded-4 transition-hover">
                                <div class="icon-circle mb-3 mx-auto bg-light-success"><i class="bi bi-trophy fs-2 text-success"></i></div>
                                <h5 class="fw-bold">Berprestasi</h5>
                                <p class="small text-muted">Aktif menjuarai kompetisi akademik & olahraga tingkat Provinsi.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box p-4 text-center shadow-sm h-100 bg-white rounded-4 transition-hover">
                                <div class="icon-circle mb-3 mx-auto bg-light-success"><i class="bi bi-wifi fs-2 text-success"></i></div>
                                <h5 class="fw-bold">Smart Campus</h5>
                                <p class="small text-muted">Fasilitas lab komputer & akses internet menyeluruh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @php
    $principal = \App\Models\Principal::where('is_active', true)->latest()->first();
    @endphp

    @if($principal)
    <section id="about" class="section py-5 my-5">
        <div class="container">
            <div class="card border-0 shadow-sm overflow-hidden rounded-4 bg-white">
                <div class="row g-0 align-items-stretch">

                    <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center text-center bg-success text-white p-5">
                        <div class="mb-4 d-inline-block">
                            <img src="{{ asset('storage/' . $principal->photo) }}"
                                class="rounded-circle border border-4 border-white shadow-lg img-fluid object-fit-cover"
                                alt="{{ $principal->name }}"
                                style="width: 160px; height: 160px;">
                        </div>
                        <h4 class="mb-2 fw-bold tracking-wide">{{ $principal->name }}</h4>
                        <span class="badge bg-white text-success px-3 py-2 rounded-pill fw-semibold shadow-sm">{{ $principal->position }}</span>
                    </div>

                    <div class="col-lg-8 p-4 p-md-5 d-flex flex-column justify-content-center bg-light bg-opacity-25">
                        <div class="position-relative">
                            <i class="bi bi-quote position-absolute top-0 start-0 translate-middle-y text-success opacity-10" style="font-size: 6rem; z-index: 0; margin-top: -2rem; margin-left: -1rem;"></i>

                            <div class="position-relative z-1 ps-lg-3">
                                <h3 class="fw-extrabold text-dark mb-1">Kata Sambutan</h3>
                                <div class="bg-success rounded-pill mb-4" style="width: 60px; height: 4px;"></div>

                                <div class="message-text text-muted lh-base fs-6 text-justify">
                                    {!! nl2br(e($principal->message)) !!}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endif

</main>

<style>
    .hero-slider {
        position: absolute;
        inset: 0;
        z-index: 1;
    }

    .hero-slider .swiper-slide {
        width: 100%;
        height: 100%;
    }

    .hero-slider .swiper-slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-img-filter {
        filter: brightness(0.45);
        height: 80vh;
        object-fit: cover;
    }

    .hero-slider .swiper-pagination {
        bottom: 30px !important;
    }

    .hero-container {
        position: relative;
        z-index: 10;
    }

    .hero-glass-box {
        background: rgba(0, 0, 0, 0.3);
        backdrop-filter: blur(8px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        max-width: 800px;
    }

    /* Principal Card Upgrade */
    .principal-card {
        background: #fff;
        border-radius: 30px;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.07);
        border: none;
    }

    .principal-img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border: 8px solid rgba(255, 255, 255, 0.2);
        border-radius: 20px;
    }

    .transition-hover:hover {
        transform: translateY(-10px);
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important;
    }

    .bg-light-success {
        background: #e8f5e9;
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .tracking-wider {
        letter-spacing: 1px;
    }

    .fw-extrabold {
        font-weight: 800;
    }

    .announcement-card {
        border-radius: 20px;
        transition: 0.3s;
        overflow: hidden;
    }

    .announcement-card:hover {
        transform: scale(1.02);
    }
</style>

@endsection