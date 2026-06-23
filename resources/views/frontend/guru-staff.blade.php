@extends('layouts.main')

@section('title', 'Guru & Staff')

@section('content')
<main class="main">

    <!-- PAGE TITLE -->
    <div class="page-title accent-background">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <div>
                <h1 class="mb-2 mb-lg-0 fw-bold">Guru & Staff TU</h1>
            </div>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="current">Guru & Staff</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- DIRECTORY SECTION -->
    <section id="team" class="py-5 bg-light">
        <div class="container">

            @if($teachers->count())

            <div class="row gy-4">

                @foreach($teachers as $teacher)

                <div class="col-lg-4 col-md-6">

                    <div class="team-member card h-100 border-0 shadow-sm overflow-hidden">

                        <div class="member-img position-relative">

                            @if($teacher->photo)
                            <img src="{{ asset('storage/' . $teacher->photo) }}"
                                class="w-100 d-block"
                                alt="{{ $teacher->name }}">
                            @else
                            <img src="{{ asset('assets/img/default-user.jpg') }}"
                                class="w-100 d-block"
                                alt="{{ $teacher->name }}">
                            @endif

                        </div>

                        <div class="member-info p-4 text-center">

                            <!-- @if(
                            str_contains(strtolower($teacher->position), 'kepala')
                            )

                            <span class="badge bg-success-subtle text-success text-uppercase px-3 py-2 rounded-pill mb-2">
                                Manajemen
                            </span>

                            @elseif(
                            str_contains(strtolower($teacher->position), 'staff') ||
                            str_contains(strtolower($teacher->position), 'tu') ||
                            str_contains(strtolower($teacher->position), 'tata usaha')
                            )

                            <span class="badge bg-secondary-subtle text-secondary text-uppercase px-3 py-2 rounded-pill mb-2">
                                Kependidikan
                            </span>

                            @else

                            <span class="badge bg-primary-subtle text-primary text-uppercase px-3 py-2 rounded-pill mb-2">
                                Tenaga Pendidik
                            </span>

                            @endif -->

                            <h5 class="fw-bold text-dark mb-1">
                                {{ $teacher->name }}
                            </h5>

                            <p class="text-muted small fw-semibold mb-3">

                                @if($teacher->subject)
                                {{ $teacher->subject }}
                                @else
                                {{ $teacher->position }}
                                @endif

                            </p>

                            <hr class="my-3 opacity-25">

                            <p class="text-secondary small card-text mb-0">
                                {{ $teacher->position }}
                            </p>

                        </div>

                    </div>

                </div>

                @endforeach

            </div>

            @else

            <div class="alert alert-warning text-center">
                Data guru dan staff belum tersedia.
            </div>

            @endif

        </div>
    </section>
</main>

<style>
    /* Card Frame Adjustments */
    .team-member {
        border-radius: 16px;
        transition: transform 0.3s cubic-bezier(0.165, 0.84, 0.44, 1), box-shadow 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12) !important;
    }

    .member-img img {
        height: 320px;
        object-fit: cover;
    }

    /* Elegant Hover Interaction for Social Links */
    .social-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(26, 89, 40, 0.75);
        /* Match layout deep green shade */
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .team-member:hover .social-overlay {
        opacity: 1;
    }

    .social-link {
        width: 44px;
        height: 44px;
        background: rgba(255, 255, 255, 0.2);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 1.1rem;
        transition: background 0.2s, transform 0.2s;
        text-decoration: none;
    }

    .social-link:hover {
        background: #fff;
        color: #1a5928;
        transform: scale(1.1);
    }

    /* Subtitle text formatting */
    .card-text {
        line-height: 1.5;
    }
</style>
@endsection