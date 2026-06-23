@extends('layouts.main')

@section('title', 'Sejarah & Visi Misi SMAN 1 Pabuaran')

@section('content')

<main class="main">

    {{-- Page Title --}}
    <div class="page-title accent-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0 fw-bold">
                Sejarah & Visi Misi
            </h1>

            <nav class="breadcrumbs">
                <ol>
                    <li>
                        <a href="{{ route('beranda') }}">
                            Beranda
                        </a>
                    </li>
                    <li class="current">
                        Sejarah & Visi Misi
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- Sejarah --}}
    <section id="history" class="py-5">

        <div class="container">

            @if($histories->count())

            @php
            $history = $histories->first();
            @endphp

            <div class="row align-items-center g-5">

                <div class="col-lg-5">

                    <div class="position-relative">

                        @if($history->image)

                        <img src="{{ asset('storage/' . $history->image) }}"
                            class="img-fluid rounded-4 shadow-lg"
                            alt="{{ $history->title }}">

                        @else

                        <img src="{{ asset('assets/img/pengumuman/kelas.jpg') }}"
                            class="img-fluid rounded-4 shadow-lg"
                            alt="Sejarah Sekolah">

                        @endif

                        <div class="experience-badge bg-success text-white p-3 rounded-3 position-absolute bottom-0 start-0 m-3 shadow">

                            <span class="fs-5 fw-bold">
                                Sejarah Sekolah
                            </span>

                        </div>

                    </div>

                </div>

                <div class="col-lg-7">

                    <div class="ps-lg-4">

                        <h6 class="text-success text-uppercase fw-bold ls-1 mb-3">
                            Tentang Kami
                        </h6>

                        <h2 class="display-5 fw-bold mb-4">
                            {{ $history->title }}
                        </h2>

                        <div class="history-text text-secondary lh-lg">
                            {!! nl2br(e($history->content)) !!}
                        </div>

                    </div>

                </div>

            </div>

            @endif

        </div>

    </section>

    {{-- Visi Misi --}}
    <section id="visi-misi" class="py-5 bg-light">

        <div class="container">

            @if(isset($visimisi) && $visimisi)

            <div class="row g-4">

                {{-- VISI --}}
                <div class="col-lg-12">

                    <div class="visi-card text-center p-5 rounded-4 shadow-sm bg-white border-top border-success border-5">

                        <i class="bi bi-eye fs-1 text-success mb-3"></i>

                        <h6 class="text-uppercase text-muted mb-2">
                            Visi Sekolah
                        </h6>

                        <h2 class="fw-bold mb-0">
                            "{{ $visimisi->vision }}"
                        </h2>

                    </div>

                </div>

                {{-- MISI --}}
                <div class="col-lg-12">

                    <div class="bg-white rounded-4 shadow-sm border p-5">

                        <h3 class="fw-bold text-success mb-4">

                            <i class="bi bi-bullseye me-2"></i>

                            Misi Sekolah

                        </h3>

                        @php
                        $missions = preg_split(
                        '/\r\n|\r|\n/',
                        $visimisi->mission
                        );
                        @endphp

                        <div class="row">

                            @foreach($missions as $mission)

                            @if(trim($mission))

                            <div class="col-md-6 mb-4">

                                <div class="d-flex">

                                    <div class="me-3">

                                        <span class="badge bg-success rounded-circle p-3">

                                            <i class="bi bi-check-lg"></i>

                                        </span>

                                    </div>

                                    <div>

                                        <p class="mb-0 text-secondary">

                                            {{ trim($mission) }}

                                        </p>

                                    </div>

                                </div>

                            </div>

                            @endif

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

            @else

            <div class="alert alert-warning text-center">

                Data Visi & Misi belum tersedia.

            </div>

            @endif

        </div>

    </section>

</main>

<style>
    .ls-1 {
        letter-spacing: 2px;
    }

    .history-text p {
        margin-bottom: 1rem;
        text-align: justify;
    }

    .experience-badge {
        min-width: 180px;
    }

    .visi-card {
        transition: .3s;
    }

    .visi-card:hover {
        transform: translateY(-5px);
    }

    section {
        padding: 80px 0;
    }

    .badge.rounded-circle {
        width: 50px;
        height: 50px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }
</style>

@endsection