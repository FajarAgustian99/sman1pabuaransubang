@extends('layouts.main')

@section('title', 'Berita & Acara SMAN 1 Pabuaran')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">

        <div class="heading">
            <div class="container">

                <div class="row justify-content-center text-center">

                    <div class="col-lg-8">

                        <h1>Berita & Acara</h1>

                        <p class="mb-0">
                            Informasi terbaru mengenai kegiatan sekolah,
                            prestasi siswa, agenda pendidikan,
                            dan berbagai acara penting di SMAN 1 Pabuaran.
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <!-- Breadcrumb -->
        <nav class="breadcrumbs">

            <div class="container">

                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li class="current">Berita & Acara</li>
                </ol>

            </div>

        </nav>

    </div>

    <!-- Berita Section -->
    <section id="news" class="section py-5">

        <div class="container">

            <!-- Section Title -->
            <div class="section-title text-center mb-5">

                <h2>Berita Terbaru</h2>

                <p>
                    Update informasi kegiatan dan pencapaian terbaru
                    SMAN 1 Pabuaran.
                </p>

            </div>

            <div class="row gy-4">

                @forelse($news as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="news-card">

                        <div class="news-img">

                            @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}"
                                class="img-fluid"
                                alt="{{ $item->title }}">
                            @else
                            <img src="https://via.placeholder.com/600x400?text=Berita+Sekolah"
                                class="img-fluid"
                                alt="{{ $item->title }}">
                            @endif

                        </div>

                        <div class="news-content">

                            <span class="badge bg-primary mb-3">
                                Berita Sekolah
                            </span>

                            <h3>
                                {{ $item->title }}
                            </h3>

                            <p>
                                {{ \Illuminate\Support\Str::limit(strip_tags($item->content), 120) }}
                            </p>

                            <div class="news-meta">
                                <span>
                                    <i class="bi bi-calendar-event"></i>
                                    {{ $item->created_at->translatedFormat('d F Y') }}
                                </span>
                            </div>

                            <a href="{{ route('frontend.berita.show', $item->slug) }}"
                                class="btn btn-primary btn-sm mt-3">
                                Baca Selengkapnya
                            </a>

                        </div>

                    </div>

                </div>

                @empty

                <div class="col-12">

                    <div class="alert alert-info text-center">
                        Belum ada berita yang dipublikasikan.
                    </div>

                </div>

                @endforelse

            </div>

            @if($news->hasPages())
            <div class="mt-5 d-flex justify-content-center">
                {{ $news->links() }}
            </div>
            @endif

        </div>

    </section>

    <!-- Upcoming Events -->
    <section id="events" class="section py-5 bg-light">

        <div class="container">

            <div class="section-title text-center mb-5">

                <h2>Agenda Acara Sekolah</h2>

                <p>
                    Jadwal kegiatan dan agenda penting sekolah
                    dalam waktu dekat.
                </p>

            </div>

            <div class="row gy-4">

                <!-- Event 1 -->
                <div class="col-lg-6">

                    <div class="event-box">

                        <div class="event-date">

                            <h3>20</h3>
                            <span>AGT</span>

                        </div>

                        <div class="event-content">

                            <h4>Seminar Pendidikan Digital</h4>

                            <p>
                                Seminar mengenai pemanfaatan teknologi digital
                                dalam dunia pendidikan modern.
                            </p>

                            <span class="event-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                Aula SMAN 1 Pabuaran
                            </span>

                        </div>

                    </div>

                </div>

                <!-- Event 2 -->
                <div class="col-lg-6">

                    <div class="event-box">

                        <div class="event-date">

                            <h3>28</h3>
                            <span>AGT</span>

                        </div>

                        <div class="event-content">

                            <h4>Lomba Antar Kelas</h4>

                            <p>
                                Kompetisi olahraga dan seni antar kelas
                                untuk meningkatkan kekompakan siswa.
                            </p>

                            <span class="event-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                Lapangan Utama Sekolah
                            </span>

                        </div>

                    </div>

                </div>

                <!-- Event 3 -->
                <div class="col-lg-6">

                    <div class="event-box">

                        <div class="event-date">

                            <h3>05</h3>
                            <span>SEP</span>

                        </div>

                        <div class="event-content">

                            <h4>Parent Meeting</h4>

                            <p>
                                Pertemuan wali murid dan guru untuk evaluasi
                                perkembangan akademik siswa.
                            </p>

                            <span class="event-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                Gedung Serbaguna
                            </span>

                        </div>

                    </div>

                </div>

                <!-- Event 4 -->
                <div class="col-lg-6">

                    <div class="event-box">

                        <div class="event-date">

                            <h3>12</h3>
                            <span>SEP</span>

                        </div>

                        <div class="event-content">

                            <h4>Festival Budaya Sekolah</h4>

                            <p>
                                Acara tahunan yang menampilkan budaya,
                                seni daerah, dan kreativitas siswa.
                            </p>

                            <span class="event-location">
                                <i class="bi bi-geo-alt-fill"></i>
                                Halaman Sekolah
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</main>

<!-- Custom CSS -->
<style>
    .news-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
    }

    .news-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .news-img img {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }

    .news-content {
        padding: 25px;
    }

    .news-content h3 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .news-content p {
        color: #666;
    }

    .news-meta {
        font-size: 14px;
        color: #888;
    }

    .event-box {
        background: #fff;
        padding: 25px;
        border-radius: 18px;
        display: flex;
        gap: 20px;
        align-items: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
    }

    .event-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .event-date {
        min-width: 90px;
        height: 90px;
        background: #0d6efd;
        color: white;
        border-radius: 18px;
        text-align: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .event-date h3 {
        margin: 0;
        font-size: 32px;
        font-weight: 700;
    }

    .event-date span {
        font-size: 14px;
        letter-spacing: 1px;
    }

    .event-content h4 {
        font-weight: 700;
        margin-bottom: 10px;
    }

    .event-content p {
        margin-bottom: 10px;
        color: #666;
    }

    .event-location {
        font-size: 14px;
        color: #0d6efd;
        font-weight: 600;
    }
</style>

@endsection