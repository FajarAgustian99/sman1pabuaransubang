@extends('layouts.main')
@section('title', 'Fasilitas')
@section('content')

<main class="main">
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Fasilitas Sekolah</h1>
                        <p class="mb-0">Lingkungan belajar yang lengkap, nyaman, dan modern untuk mendukung standar pendidikan nasional di SMAN 1 Pabuaran.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Beranda</a></li>
                    <li class="current">Fasilitas</li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="facilities" class="section py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="facility-item">
                        <div class="facility-img">
                            <img src="assets/img/fasilitas/lab-kom.jpg" class="img-fluid" alt="Lab Komputer">
                            <a href="assets/img/fasilitas/lab-kom.jpg" class="glightbox zoom-icon"><i class="bi bi-zoom-in"></i></a>
                        </div>
                        <div class="facility-content">
                            <h3>Laboratorium Komputer</h3>
                            <p>Dilengkapi dengan unit komputer modern dan akses internet cepat untuk mendukung ANBK dan praktikum IT.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="facility-item">
                        <div class="facility-img">
                            <img src="assets/img/fasilitas/perpustakaan.jpg" class="img-fluid" alt="Perpustakaan">
                            <a href="assets/img/fasilitas/perpustakaan.jpg" class="glightbox zoom-icon"><i class="bi bi-zoom-in"></i></a>
                        </div>
                        <div class="facility-content">
                            <h3>Perpustakaan Digital</h3>
                            <p>Koleksi buku fisik dan digital yang lengkap dengan area baca yang tenang dan nyaman bagi para siswa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="facility-item">
                        <div class="facility-img">
                            <img src="assets/img/fasilitas/lab-ipa.jpg" class="img-fluid" alt="Lab IPA">
                            <a href="assets/img/fasilitas/lab-ipa.jpg" class="glightbox zoom-icon"><i class="bi bi-zoom-in"></i></a>
                        </div>
                        <div class="facility-content">
                            <h3>Laboratorium IPA</h3>
                            <p>Ruang praktikum Kimia, Fisika, dan Biologi dengan alat peraga yang lengkap sesuai standar kurikulum.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="facility-item">
                        <div class="facility-img">
                            <img src="assets/img/fasilitas/lapangan.jpg" class="img-fluid" alt="Lapangan">
                            <a href="assets/img/fasilitas/lapangan.jpg" class="glightbox zoom-icon"><i class="bi bi-zoom-in"></i></a>
                        </div>
                        <div class="facility-content">
                            <h3>Lapangan Serbaguna</h3>
                            <p>Fasilitas olahraga luar ruangan untuk basket, futsal, voli, serta upacara bendera mingguan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="facility-item">
                        <div class="facility-img">
                            <img src="assets/img/fasilitas/masjid.jpg" class="img-fluid" alt="Masjid">
                            <a href="assets/img/fasilitas/masjid.jpg" class="glightbox zoom-icon"><i class="bi bi-zoom-in"></i></a>
                        </div>
                        <div class="facility-content">
                            <h3>Masjid Al-Ikhlas</h3>
                            <p>Sarana ibadah dan pusat kegiatan keagamaan untuk meningkatkan iman dan taqwa siswa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="facility-item">
                        <div class="facility-img">
                            <img src="assets/img/fasilitas/kelas.jpg" class="img-fluid" alt="Ruang Kelas">
                            <a href="assets/img/fasilitas/kelas.jpg" class="glightbox zoom-icon"><i class="bi bi-zoom-in"></i></a>
                        </div>
                        <div class="facility-content">
                            <h3>Ruang Kelas Inovatif</h3>
                            <p>Ruang kelas bersih dan representatif yang dilengkapi dengan alat bantu ajar multimedia.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>


@endsection