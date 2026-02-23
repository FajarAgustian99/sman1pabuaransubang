<!DOCTYPE html>
<html lang="id">

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SMAN 1 Pabuaran Subang - @yield('title')</title>

    <meta name="description" content="Website Resmi SMA Negeri 1 Pabuaran Subang - Mewujudkan generasi cerdas, berkarakter, dan inovatif.">
    <meta name="keywords" content="SMAN 1 Pabuaran, SMA Subang, Sekolah Pabuaran, Pendidikan Subang">

    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">



    {{-- Bagian CSS tambahan jika ada --}}
    @stack('styles')

    <style>
        .sitename {
            font-size: 1.2rem !important;
            font-weight: 700;
            letter-spacing: 1px;
            color: #37423b;
        }

        .hero {
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .hero .carousel-item {
            height: 80vh;
            min-height: 500px;
        }

        .hero .carousel-item img {
            height: 100%;
            object-fit: cover;
            filter: brightness(40%);
        }

        .hero .hero-container {
            position: absolute;
            inset: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            text-align: center;
            z-index: 3;
            padding: 0 15px;
        }

        .principal-card {
            border: none;
            border-radius: 15px;
            background: #f8f9fa;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .principal-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>


</head>

<body class="index-page">

    {{-- Memanggil Partial Header --}}
    @include('partials.header')

    <main class="main">
        {{-- Tempat Konten Utama Berubah-ubah --}}
        @yield('content')
    </main>

    {{-- Memanggil Partial Footer --}}
    @include('partials.footer')

    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>