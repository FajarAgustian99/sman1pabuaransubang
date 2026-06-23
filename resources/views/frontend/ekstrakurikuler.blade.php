@extends('layouts.main')

@section('title', 'Ekstrakurikuler SMAN 1 Pabuaran')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">

        <div class="heading">
            <div class="container">

                <div class="row justify-content-center text-center">

                    <div class="col-lg-8">

                        <h1>Ekstrakurikuler</h1>

                        <p class="mb-0">
                            SMAN 1 Pabuaran menyediakan berbagai kegiatan ekstrakurikuler
                            untuk mengembangkan bakat, kreativitas, karakter,
                            dan kemampuan siswa di bidang akademik maupun non-akademik.
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <!-- Breadcrumb -->
        <nav class="breadcrumbs">

            <div class="container">

                <ol>
                    <li>
                        <a href="{{ route('beranda') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="current">
                        Ekstrakurikuler
                    </li>
                </ol>

            </div>

        </nav>

    </div>

    <!-- Extracurricular Section -->
    <section id="extracurricular" class="section py-5">

        <div class="container">

            <div class="section-title text-center mb-5">

                <h2>Kegiatan Ekstrakurikuler</h2>

                <p>
                    Berbagai pilihan kegiatan ekstrakurikuler untuk meningkatkan
                    potensi siswa dalam bidang olahraga, seni, teknologi,
                    kepemimpinan, dan keagamaan.
                </p>

            </div>

            <div class="row gy-4">

                @forelse($extracurriculars as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="extracurricular-card">

                        <div class="extracurricular-img">

                            <img
                                src="{{ $item->image
                                        ? asset('storage/' . $item->image)
                                        : asset('assets/img/no-image.jpg') }}"
                                class="img-fluid"
                                alt="{{ $item->name }}">

                        </div>

                        <div class="extracurricular-content">

                            <span class="badge bg-{{ $item->badge_color ?? 'primary' }} mb-3">
                                {{ $item->category }}
                            </span>

                            <h3>
                                {{ $item->name }}
                            </h3>

                            <p>
                                {{ $item->description }}
                            </p>

                        </div>

                    </div>

                </div>

                @empty

                <div class="col-12">

                    <div class="alert alert-info text-center">

                        Data ekstrakurikuler belum tersedia.

                    </div>

                </div>

                @endforelse

            </div>

        </div>

    </section>

    <!-- Prestasi Ekskul -->
    <section id="achievement" class="section py-5 bg-light">

        <div class="container">

            <div class="section-title text-center mb-5">

                <h2>Prestasi Ekstrakurikuler</h2>

                <p>
                    Berbagai pencapaian siswa dalam kegiatan ekstrakurikuler
                    tingkat sekolah, kabupaten, dan provinsi.
                </p>

            </div>

            <div class="row gy-4">

                @forelse($achievements as $achievement)

                <div class="col-lg-3 col-md-6">

                    <div class="achievement-box">

                        <h3>
                            {{ $achievement->value }}
                        </h3>

                        <p>
                            {{ $achievement->title }}
                        </p>

                    </div>

                </div>

                @empty

                <div class="col-12">

                    <div class="alert alert-info text-center">

                        Data prestasi ekstrakurikuler belum tersedia.

                    </div>

                </div>

                @endforelse

            </div>

        </div>

    </section>

</main>

<style>
    .extracurricular-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all .3s ease;
        height: 100%;
    }

    .extracurricular-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .extracurricular-img img {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }

    .extracurricular-content {
        padding: 25px;
    }

    .extracurricular-content h3 {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .extracurricular-content p {
        color: #666;
        margin-bottom: 0;
    }

    .achievement-box {
        background: #fff;
        padding: 40px 20px;
        border-radius: 18px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all .3s ease;
        height: 100%;
    }

    .achievement-box:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .achievement-box h3 {
        font-size: 42px;
        color: #0d6efd;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .achievement-box p {
        margin-bottom: 0;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .extracurricular-content h3 {
            font-size: 20px;
        }

        .achievement-box h3 {
            font-size: 32px;
        }

        .extracurricular-img img {
            height: 220px;
        }
    }
</style>

@endsection