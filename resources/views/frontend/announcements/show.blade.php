@extends('layouts.main')

@section('title', $announcement->title)

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title">

        <div class="heading">
            <div class="container">

                <div class="row justify-content-center text-center">

                    <div class="col-lg-8">

                        <h1>{{ $announcement->title }}</h1>

                        <p class="mb-0">
                            Informasi dan pengumuman resmi
                            SMAN 1 Pabuaran.
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <!-- Breadcrumb -->
        <nav class="breadcrumbs">

            <div class="container">

                <ol>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="current">{{ $announcement->title }}</li>
                </ol>

            </div>

        </nav>

    </div>

    <!-- Detail Pengumuman -->
    <section class="section py-5">

        <div class="container">

            <div class="announcement-card">

                @if($announcement->image)
                <div class="announcement-image">

                    <img src="{{ asset('storage/' . $announcement->image) }}"
                        alt="{{ $announcement->title }}"
                        class="img-fluid">

                </div>
                @endif

                <div class="announcement-content">

                    @if($announcement->category)
                    <span class="badge bg-primary mb-3">
                        {{ $announcement->category }}
                    </span>
                    @endif

                    <h1 class="announcement-title">
                        {{ $announcement->title }}
                    </h1>

                    <div class="announcement-meta">

                        <span>
                            <i class="bi bi-calendar-event"></i>
                            {{ \Carbon\Carbon::parse($announcement->announcement_date)->translatedFormat('d F Y') }}
                        </span>

                    </div>

                    <hr>

                    <div class="announcement-description">
                        {!! nl2br(e($announcement->description)) !!}
                    </div>



                </div>

            </div>

        </div>

    </section>
</main>

<style>
    .announcement-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    }

    .announcement-image img {
        width: 100%;
        max-height: 550px;
        object-fit: cover;
    }

    .announcement-content {
        padding: 40px;
    }

    .announcement-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #222;
        margin-bottom: 15px;
        line-height: 1.3;
    }

    .announcement-meta {
        color: #777;
        font-size: 14px;
        margin-bottom: 20px;
    }

    .announcement-description {
        color: #444;
        line-height: 1.9;
        font-size: 1.05rem;
    }

    .announcement-description p {
        margin-bottom: 1rem;
    }

    .announcement-description img {
        max-width: 100%;
        border-radius: 12px;
        margin: 20px 0;
    }

    .announcement-description table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    .announcement-description table th,
    .announcement-description table td {
        border: 1px solid #ddd;
        padding: 10px;
    }

    .announcement-description table th {
        background: #f5f5f5;
    }

    @media (max-width: 768px) {
        .announcement-content {
            padding: 25px;
        }

        .announcement-title {
            font-size: 1.8rem;
        }
    }
</style>

@endsection