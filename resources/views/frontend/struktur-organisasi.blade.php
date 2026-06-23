@extends('layouts.main')

@section('title', 'Struktur Organisasi')

@section('content')
<main class="main">

    <!-- PAGE TITLE -->
    <div class="page-title accent-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <div>
                <h1 class="mb-2 mb-lg-0 fw-bold">Struktur Organisasi</h1>

            </div>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="current">Struktur Organisasi</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- TIER 1: TOP MANAGEMENT (PRINCIPAL) -->
    <section id="structure" class="py-5 bg-white">
        <div class="container">

            @if($organizations->count())

            {{-- Kepala Sekolah --}}
            @php
            $principal = $organizations->first();
            @endphp

            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="org-card principal-tier text-center card border-0 shadow rounded-4 overflow-hidden">

                        <div class="position-relative img-container">

                            @if($principal->photo)
                            <img src="{{ asset('storage/' . $principal->photo) }}"
                                class="w-100 d-block"
                                alt="{{ $principal->name }}">
                            @else
                            <img src="{{ asset('assets/img/default-user.jpg') }}"
                                class="w-100 d-block"
                                alt="{{ $principal->name }}">
                            @endif

                            <span class="position-absolute bottom-0 start-50 translate-middle-x badge bg-success px-4 py-2 rounded-pill shadow mb-n3">
                                Kepala Sekolah
                            </span>

                        </div>

                        <div class="card-body pt-4 px-4 pb-4 bg-light-gradient">

                            <h5 class="fw-bold text-dark mb-1">
                                {{ $principal->name }}
                            </h5>

                            <p class="text-success small fw-bold text-uppercase mb-3">
                                {{ $principal->position }}
                            </p>

                        </div>

                    </div>
                </div>
            </div>

            {{-- Struktur Lainnya --}}
            <div class="text-center mb-4 mt-5">
                <span class="badge bg-secondary-subtle text-secondary px-4 py-2 rounded-pill">
                    Struktur Organisasi Sekolah
                </span>
            </div>

            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">

                @foreach($organizations->skip(1) as $item)

                <div class="col">

                    <div class="org-card card h-100 border-0 shadow-sm rounded-4 overflow-hidden bg-light">

                        <div class="img-container small-tier">

                            @if($item->photo)
                            <img src="{{ asset('storage/' . $item->photo) }}"
                                class="w-100 d-block"
                                alt="{{ $item->name }}">
                            @else
                            <img src="{{ asset('assets/img/default-user.jpg') }}"
                                class="w-100 d-block"
                                alt="{{ $item->name }}">
                            @endif

                        </div>

                        <div class="card-body p-3 text-center bg-white">

                            <h6 class="fw-bold text-dark mb-1">
                                {{ $item->name }}
                            </h6>

                            <p class="text-primary small fw-semibold mb-2">
                                {{ $item->position }}
                            </p>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

            @else

            <div class="alert alert-warning text-center">
                Data struktur organisasi belum tersedia.
            </div>

            @endif

        </div>
    </section>
</main>

<style>
    /* Framework Structural Enhancements */
    .org-card {
        transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.3s ease;
    }

    .org-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08) !important;
    }

    /* Image Container Sizing and Mechanics */
    .img-container img {
        object-fit: cover;
    }

    .principal-tier img {
        height: 340px;
    }

    .small-tier img {
        height: 240px;
    }

    /* Subtle background styling adjustments */
    .bg-light-gradient {
        background: linear-gradient(180deg, #fdfdfd 0%, #f8f9fa 100%);
    }

    .tracking-wider {
        letter-spacing: 1px;
    }

    .mb-n3 {
        margin-bottom: -1rem !important;
    }

    .z-3 {
        z-index: 3;
    }

    /* Dynamic Side Boxes */
    .dynamic-hover {
        transition: background-color 0.2s ease, transform 0.2s ease;
    }

    .dynamic-hover:hover {
        background-color: #ffffff !important;
        transform: scale(1.01);
    }

    .icon-box {
        width: 38px;
        height: 38px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
@endsection