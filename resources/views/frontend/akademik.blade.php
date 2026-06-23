@extends('layouts.main')
@section('title', 'Akademik SMAN 1 Pabuaran - Informasi Kurikulum, Jadwal, dan Program Unggulan')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">

        <div class="heading">
            <div class="container">

                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">

                        <h1>Akademik</h1>

                        <p class="mb-0">
                            Informasi akademik SMAN 1 Pabuaran meliputi kurikulum,
                            jadwal pembelajaran, program unggulan, kalender akademik,
                            dan kegiatan pendidikan untuk mendukung prestasi siswa.
                        </p>

                    </div>
                </div>

            </div>
        </div>

        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li class="current">Akademik</li>
                </ol>
            </div>
        </nav>

    </div>

    {{-- ========================= PROGRAM AKADEMIK ========================= --}}
    <section id="academic" class="section py-5">

        <div class="container">

            <div class="section-title text-center mb-5">
                <h2>Program Akademik</h2>
                <p>
                    SMAN 1 Pabuaran menghadirkan sistem pendidikan berkualitas berbasis teknologi dan karakter.
                </p>
            </div>

            <div class="row gy-4">

                @forelse($academicPrograms as $program)

                <div class="col-lg-4 col-md-6">

                    <div class="academic-card">

                        <div class="academic-icon">
                            <i class="{{ $program->icon ?? 'bi bi-book' }}"></i>
                        </div>

                        <h3>{{ $program->title }}</h3>

                        <p>
                            {{ $program->description }}
                        </p>

                    </div>

                </div>

                @empty

                <div class="col-12 text-center text-muted">
                    Data program akademik belum tersedia.
                </div>

                @endforelse

            </div>

        </div>

    </section>

    {{-- ========================= JADWAL AKADEMIK ========================= --}}
    <section id="schedule" class="section py-5 bg-light">

        <div class="container">

            <div class="section-title text-center mb-5">
                <h2>Jadwal Akademik</h2>
                <p>Informasi kegiatan pembelajaran dan agenda akademik sekolah.</p>
            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Kegiatan</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($academicSchedules as $key => $schedule)

                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td class="fw-semibold">{{ $schedule->activity }}</td>
                            <td>
                                {{ optional($schedule->activity_date)->format('d M Y') }}
                            </td>
                            <td>{{ $schedule->description ?? '-' }}</td>
                        </tr>

                        @empty

                        <tr>
                            <td colspan="4" class="text-center text-muted">
                                Jadwal akademik belum tersedia.
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </section>

    {{-- ========================= PROGRAM UNGGULAN ========================= --}}
    <section id="program" class="section py-5">

        <div class="container">

            <div class="section-title text-center mb-5">
                <h2>Program Unggulan</h2>
                <p>Berbagai program unggulan sekolah untuk meningkatkan kualitas akademik.</p>
            </div>

            <div class="row gy-4">

                @forelse($featuredPrograms as $item)

                <div class="col-lg-4 col-md-6">

                    <div class="program-card">

                        <img src="{{ $item->image ? asset('storage/'.$item->image) : asset('assets/img/default.jpg') }}"
                            class="img-fluid"
                            alt="{{ $item->title }}">

                        <div class="program-content">

                            <h4>{{ $item->title }}</h4>

                            <p>
                                {{ $item->description }}
                            </p>

                        </div>

                    </div>

                </div>

                @empty

                <div class="col-12 text-center text-muted">
                    Program unggulan belum tersedia.
                </div>

                @endforelse

            </div>

        </div>

    </section>

</main>

{{-- STYLE tetap --}}
<style>
    .academic-card {
        background: #fff;
        padding: 35px 25px;
        border-radius: 18px;
        text-align: center;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
    }

    .academic-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .academic-icon {
        width: 80px;
        height: 80px;
        margin: auto;
        margin-bottom: 20px;
        border-radius: 50%;
        background: #0d6efd;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 32px;
    }

    .academic-card h3 {
        font-size: 24px;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .program-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        height: 100%;
    }

    .program-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .program-card img {
        width: 100%;
        height: 240px;
        object-fit: cover;
    }

    .program-content {
        padding: 25px;
    }

    .program-content h4 {
        font-weight: 700;
        margin-bottom: 12px;
    }
</style>

@endsection