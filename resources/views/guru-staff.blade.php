@extends('layouts.main')
@section('title', 'Guru & Staff')
@section('content')
<main class="main">

    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Guru & Staff TU</h1>
                        <p class="mb-0">Mengenal lebih dekat para pendidik dan tenaga kependidikan profesional yang membimbing putra-putri bangsa di SMAN 1 Pabuaran.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Beranda</a></li>
                    <li class="current">Guru & Staff</li>
                </ol>
            </div>
        </nav>
    </div>
    <section id="trainers" class="section trainers">

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-envelope"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Nama Kepala Sekolah, S.Pd., M.Pd.</h4>
                        <span>Kepala Sekolah</span>
                        <p>Berkomitmen memimpin SMAN 1 Pabuaran menuju sekolah yang inovatif, religius, dan berprestasi unggul.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-envelope"></i></a>
                            <a href="#"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Nama Guru 1, S.Pd.</h4>
                        <span>Guru Matematika</span>
                        <p>Membantu siswa memahami logika matematika dengan metode pembelajaran yang menyenangkan dan aplikatif.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-envelope"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Nama Guru 2, S.Pd.</h4>
                        <span>Guru Bahasa Inggris</span>
                        <p>Mengembangkan kemampuan literasi dan komunikasi global siswa melalui program English Day.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
                    <div class="member-img">
                        <img src="assets/img/trainers/trainer-4.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>Nama Staff 1</h4>
                        <span>Kepala Tata Usaha</span>
                        <p>Mengelola administrasi sekolah secara efektif dan transparan untuk mendukung kelancaran KBM.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                    <div class="member-img">
                        <img src="assets/img/trainers/trainer-5.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>Nama Staff 2</h4>
                        <span>Bendahara Sekolah</span>
                        <p>Bertanggung jawab dalam pengelolaan keuangan sekolah yang akuntabel dan profesional.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
                    <div class="member-img">
                        <img src="assets/img/trainers/trainer-6.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="member-info text-center">
                        <h4>Nama Guru BK, S.Psi.</h4>
                        <span>Guru Bimbingan Konseling</span>
                        <p>Mendampingi perkembangan psikologis dan mengarahkan minat bakat siswa dalam menentukan masa depan.</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
</main>
@endsection