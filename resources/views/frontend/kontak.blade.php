@extends('layouts.main')

@section('title', 'Kontak SMAN 1 Pabuaran')

@section('content')

<main class="main">

    {{-- PAGE TITLE --}}
    <div class="page-title">

        <div class="heading">
            <div class="container">

                <div class="row justify-content-center text-center">

                    <div class="col-lg-8">

                        <h1>Kontak Kami</h1>

                        <p class="mb-0">
                            Hubungi SMAN 1 Pabuaran untuk informasi sekolah,
                            akademik, PPDB, dan berbagai layanan pendidikan lainnya.
                        </p>

                    </div>

                </div>

            </div>
        </div>

        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li>
                        <a href="{{ route('beranda') }}">
                            Beranda
                        </a>
                    </li>
                    <li class="current">
                        Kontak
                    </li>
                </ol>
            </div>
        </nav>

    </div>

    {{-- CONTACT SECTION --}}
    <section id="contact" class="section py-5">

        <div class="container">

            <div class="row gy-5">

                {{-- CONTACT INFORMATION --}}
                <div class="col-lg-5">

                    <div class="contact-info">

                        <div class="section-title mb-4">

                            <h2>Informasi Kontak</h2>

                            <p>
                                Silakan hubungi kami melalui informasi berikut.
                            </p>

                        </div>

                        {{-- Alamat --}}
                        <div class="info-box">

                            <div class="icon-box">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>

                            <div class="content">

                                <h4>Alamat</h4>

                                <p>
                                    {{ $contact->address ?? '-' }}
                                </p>

                            </div>

                        </div>

                        {{-- Telepon --}}
                        <div class="info-box">

                            <div class="icon-box">
                                <i class="bi bi-telephone-fill"></i>
                            </div>

                            <div class="content">

                                <h4>Telepon</h4>

                                <p>
                                    {{ $contact->phone ?? '-' }}
                                </p>

                            </div>

                        </div>

                        {{-- Email --}}
                        <div class="info-box">

                            <div class="icon-box">
                                <i class="bi bi-envelope-fill"></i>
                            </div>

                            <div class="content">

                                <h4>Email</h4>

                                <p>
                                    {{ $contact->email ?? '-' }}
                                </p>

                            </div>

                        </div>

                        {{-- Jam Operasional --}}
                        <div class="info-box mb-0">

                            <div class="icon-box">
                                <i class="bi bi-clock-fill"></i>
                            </div>

                            <div class="content">

                                <h4>Jam Operasional</h4>

                                <p>
                                    {{ $contact->working_hours ?? '-' }}
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                {{-- CONTACT FORM --}}
                <div class="col-lg-7">

                    <div class="contact-form-wrapper">

                        <div class="section-title mb-4">

                            <h2>Kirim Pesan</h2>

                            <p>
                                Isi formulir berikut untuk menghubungi pihak sekolah.
                            </p>

                        </div>

                        {{-- ALERT SUCCESS --}}
                        @if(session('success'))

                        <div class="alert alert-success alert-dismissible fade show">

                            {{ session('success') }}

                            <button type="button"
                                class="btn-close"
                                data-bs-dismiss="alert"></button>

                        </div>

                        @endif

                        {{-- ALERT ERROR --}}
                        @if ($errors->any())

                        <div class="alert alert-danger">

                            <ul class="mb-0">

                                @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                        @endif

                        <form action="{{ route('frontend.kontak.send') }}"
                            method="POST">

                            @csrf

                            <div class="row gy-4">

                                {{-- Nama --}}
                                <div class="col-md-6">

                                    <input type="text"
                                        name="name"
                                        class="form-control"
                                        value="{{ old('name') }}"
                                        placeholder="Nama Lengkap"
                                        required>

                                </div>

                                {{-- Email --}}
                                <div class="col-md-6">

                                    <input type="email"
                                        name="email"
                                        class="form-control"
                                        value="{{ old('email') }}"
                                        placeholder="Email"
                                        required>

                                </div>

                                {{-- Subject --}}
                                <div class="col-12">

                                    <input type="text"
                                        name="subject"
                                        class="form-control"
                                        value="{{ old('subject') }}"
                                        placeholder="Subjek"
                                        required>

                                </div>

                                {{-- Pesan --}}
                                <div class="col-12">

                                    <textarea
                                        name="message"
                                        rows="7"
                                        class="form-control"
                                        placeholder="Tulis pesan Anda..."
                                        required>{{ old('message') }}</textarea>

                                </div>

                                {{-- Submit --}}
                                <div class="col-12">

                                    <button type="submit"
                                        class="btn btn-primary px-5 py-3">

                                        <i class="bi bi-send-fill me-2"></i>
                                        Kirim Pesan

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- GOOGLE MAPS --}}
    <section id="maps" class="section pb-5">

        <div class="container">

            <div class="map-container">

                @if($contact && $contact->google_maps_embed)

                {!! $contact->google_maps_embed !!}

                @else

                <div class="text-center py-5 bg-light">

                    <i class="bi bi-map fs-1 text-secondary"></i>

                    <p class="mt-3 mb-0 text-muted">
                        Peta lokasi belum tersedia.
                    </p>

                </div>

                @endif

            </div>

        </div>

    </section>

</main>

<style>
    .contact-info {
        background: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
        height: 100%;
    }

    .info-box {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
    }

    .icon-box {
        width: 60px;
        height: 60px;
        background: #0d6efd;
        color: #fff;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        flex-shrink: 0;
    }

    .content h4 {
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .content p {
        margin: 0;
        color: #666;
    }

    .contact-form-wrapper {
        background: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
    }

    .form-control {
        height: 55px;
        border-radius: 12px;
        border: 1px solid #ddd;
        padding: 10px 20px;
        box-shadow: none;
    }

    textarea.form-control {
        height: auto;
    }

    .form-control:focus {
        border-color: #0d6efd;
        box-shadow: none;
    }

    .btn-primary {
        border-radius: 12px;
        font-weight: 600;
    }

    .map-container {
        overflow: hidden;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
    }

    .map-container iframe {
        width: 100%;
        height: 450px;
        border: 0;
        display: block;
    }

    @media (max-width: 768px) {

        .contact-info,
        .contact-form-wrapper {
            padding: 25px;
        }

        .icon-box {
            width: 50px;
            height: 50px;
            font-size: 20px;
        }

        .content h4 {
            font-size: 18px;
        }
    }
</style>

@endsection