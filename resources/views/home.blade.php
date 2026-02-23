@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
{{-- Semua kode di dalam tag <section> yang Abang buat tadi pindahkan ke sini --}}

<main class="main">
    <section id="hero" class="hero section dark-background">
        <div id="schoolCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/kelas.jpg" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/kelas.jpg" class="d-block w-100" alt="Slide 2">
                </div>
            </div>
        </div>

        <div class="hero-container container">
            <h2 class="text-white display-4 fw-bold">Membangun Masa Depan Gemilang</h2>
            <p class="text-white fs-4">Selamat Datang di Website Resmi SMAN 1 Pabuaran Subang</p>
            <div class="d-flex mt-4">
                <a href="#about" class="btn-get-started">Jelajahi Profil</a>
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="glightbox btn-watch-video d-flex align-items-center ms-4 text-white text-decoration-none">
                    <i class="bi bi-play-circle fs-2 me-2"></i><span>Video Profil</span>
                </a>
            </div>
        </div>
    </section>

    <section id="counts" class="section counts light-background py-5">
        <div class="container">
            <div class="row gy-4 text-center">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item p-4 bg-white shadow-sm border-bottom border-primary border-4 rounded">
                        <span data-purecounter-start="0" data-purecounter-end="1232" class="purecounter fs-2 fw-bold d-block"></span>
                        <p class="mb-0 text-muted">Siswa Aktif</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item p-4 bg-white shadow-sm border-bottom border-success border-4 rounded">
                        <span data-purecounter-start="0" data-purecounter-end="65" class="purecounter fs-2 fw-bold d-block"></span>
                        <p class="mb-0 text-muted">Guru & Staff</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item p-4 bg-white shadow-sm border-bottom border-warning border-4 rounded">
                        <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter fs-2 fw-bold d-block"></span>
                        <p class="mb-0 text-muted">Ekstrakurikuler</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item p-4 bg-white shadow-sm border-bottom border-danger border-4 rounded">
                        <span data-purecounter-start="0" data-purecounter-end="15" class="purecounter fs-2 fw-bold d-block"></span>
                        <p class="mb-0 text-muted">Laboratorium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="why-us" class="section why-us py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="why-box bg-success p-5 text-white h-100 rounded-4">
                        <h3>Mengapa Memilih Kami?</h3>
                        <p>Kami berkomitmen menciptakan lingkungan belajar yang kondusif, religius, dan berbasis teknologi untuk mencetak lulusan unggulan yang siap bersaing.</p>
                        <div class="text-center">
                            <a href="sejarah-visi-misi.html" class="btn btn-outline-light rounded-pill px-4 mt-3">Visi & Misi <i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row gy-4">
                        <div class="col-md-4">
                            <div class="icon-box p-4 text-center shadow-sm h-100 bg-white rounded">
                                <i class="bi bi-mortarboard fs-1 text-success mb-3"></i>
                                <h4>Akreditasi A</h4>
                                <p class="small text-muted">Kualitas pendidikan terjamin dengan standar nasional terbaik.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box p-4 text-center shadow-sm h-100 bg-white rounded">
                                <i class="bi bi-trophy fs-1 text-success mb-3"></i>
                                <h4>Prestasi</h4>
                                <p class="small text-muted">Berbagai juara di bidang akademik dan seni tingkat provinsi.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box p-4 text-center shadow-sm h-100 bg-white rounded">
                                <i class="bi bi-wifi fs-1 text-success mb-3"></i>
                                <h4>Smart Campus</h4>
                                <p class="small text-muted">Akses internet cepat dan pembelajaran berbasis digital.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="section py-5">
        <div class="container">
            <div class="principal-card">
                <div class="row align-items-center">
                    <div class="col-lg-3 text-center mb-4 mb-lg-0">
                        <img src="assets/img/trainers/trainer-1.jpg" alt="Kepala Sekolah" class="principal-img rounded-circle mb-3">
                        <h5 class="mb-0 fw-bold">Nama Kepala Sekolah</h5>
                        <p class="text-success small">Kepala Sekolah</p>
                    </div>
                    <div class="col-lg-9 px-lg-5">
                        <h3 class="fw-bold mb-3">Sambutan Kepala Sekolah</h3>
                        <p class="fst-italic text-muted">"Assalamu’alaikum Warahmatullahi Wabarakatuh. Selamat datang di SMAN 1 Pabuaran. Melalui website ini, kami berkomitmen memberikan informasi transparan mengenai perkembangan sekolah demi mewujudkan generasi yang cerdas dan berakhlaqul karimah..."</p>
                        <a href="about.html" class="btn btn-success rounded-pill px-4 mt-2">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<section id="counts" class="section counts light-background py-5">
</section>
@endsection