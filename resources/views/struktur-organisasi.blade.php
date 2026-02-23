@extends('layouts.main')
@section('title', 'Struktur Organisasi')
@section('content')

<main class="main">
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Struktur Organisasi</h1>
                        <p class="mb-0">Sinergi kepemimpinan dan manajemen sekolah untuk menciptakan lingkungan pendidikan yang progresif.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Beranda</a></li>
                    <li class="current">Struktur Organisasi</li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="trainers" class="trainers section py-5">
        <div class="container">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow">
                        <img src="assets/img/trainers/kepsek.jpg" class="img-fluid" alt="Kepala Sekolah">
                        <div class="member-info text-center">
                            <h4>Nama Kepala Sekolah, M.Pd</h4>
                            <span>Kepala Sekolah</span>
                            <p>Bertanggung jawab penuh atas manajemen, pengembangan, dan kebijakan strategis SMAN 1 Pabuaran.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow-sm">
                        <img src="assets/img/trainers/wakasek-1.jpg" class="img-fluid" alt="">
                        <div class="member-info text-center">
                            <h4>Nama Wakasek 1</h4>
                            <span>Wakasek Kurikulum</span>
                            <p>Mengelola program pembelajaran dan kalender akademik.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow-sm">
                        <img src="assets/img/trainers/wakasek-2.jpg" class="img-fluid" alt="">
                        <div class="member-info text-center">
                            <h4>Nama Wakasek 2</h4>
                            <span>Wakasek Kesiswaan</span>
                            <p>Membina kedisiplinan dan pengembangan bakat siswa.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow-sm">
                        <img src="assets/img/trainers/wakasek-3.jpg" class="img-fluid" alt="">
                        <div class="member-info text-center">
                            <h4>Nama Wakasek 3</h4>
                            <span>Wakasek Sarana Prasarana</span>
                            <p>Mengelola fasilitas dan infrastruktur sekolah.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                    <div class="member shadow-sm">
                        <img src="assets/img/trainers/wakasek-4.jpg" class="img-fluid" alt="">
                        <div class="member-info text-center">
                            <h4>Nama Wakasek 4</h4>
                            <span>Wakasek Humas</span>
                            <p>Menjalin kerja sama dengan masyarakat dan industri.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section py-5 bg-light">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="p-4 bg-white border-start border-success border-4 shadow-sm">
                        <h4 class="fw-bold">Komite Sekolah</h4>
                        <p class="text-muted">Mitra strategis sekolah dalam memberikan pertimbangan, dukungan, dan pengawasan pelayanan pendidikan.</p>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="p-4 bg-white border-start border-success border-4 shadow-sm">
                        <h4 class="fw-bold">Kepala Tata Usaha</h4>
                        <p class="text-muted">Mengelola administrasi persuratan, kepegawaian, dan data pokok pendidikan secara profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection