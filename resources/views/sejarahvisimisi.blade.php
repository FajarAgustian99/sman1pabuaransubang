@extends('layouts.main')

@section('title', 'Sejarah & Visi Misi')

@section('content')
{{-- Semua kode di dalam tag <section> --}}

<main class="main">
    <div class="page-title">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Program Akademik</h1>
                        <p class="mb-0">Kami menerapkan Kurikulum Merdeka yang berfokus pada pengembangan minat, bakat, dan karakter Profil Pelajar Pancasila untuk menyiapkan generasi unggul.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Beranda</a></li>
                    <li class="current">Akademik</li>
                </ol>
            </div>
        </nav>
    </div>

    <section id="courses" class="courses section py-5">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item shadow-sm border-0">
                        <img src="assets/img/course-1.jpg" class="img-fluid" alt="Rumpun MIPA">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Sains & Matematika</p>
                            </div>
                            <h3><a href="#">MIPA (Fase F)</a></h3>
                            <p class="description">Fokus pada pendalaman biologi, fisika, kimia, dan matematika tingkat lanjut untuk persiapan pendidikan tinggi di bidang teknik dan kesehatan.</p>
                            <div class="trainer d-flex justify-content-between align-items-center border-top pt-3">
                                <div class="info-text"><i class="bi bi-book me-1"></i> 10 Mata Pelajaran</div>
                                <div class="info-text"><i class="bi bi-person-workspace me-1"></i> Praktikum Lab</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item shadow-sm border-0">
                        <img src="assets/img/course-2.jpg" class="img-fluid" alt="Rumpun IPS">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Sosial & Humaniora</p>
                            </div>
                            <h3><a href="#">IPS (Fase F)</a></h3>
                            <p class="description">Mempelajari dinamika sosial, ekonomi, geografi, dan sosiologi untuk mencetak lulusan yang kritis terhadap isu sosial dan ekonomi global.</p>
                            <div class="trainer d-flex justify-content-between align-items-center border-top pt-3">
                                <div class="info-text"><i class="bi bi-book me-1"></i> 10 Mata Pelajaran</div>
                                <div class="info-text"><i class="bi bi-people me-1"></i> Proyek Sosial</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item shadow-sm border-0">
                        <img src="assets/img/course-3.jpg" class="img-fluid" alt="Fase E">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="category">Umum</p>
                            </div>
                            <h3><a href="#">Kelas X (Fase E)</a></h3>
                            <p class="description">Tahap awal Kurikulum Merdeka dimana siswa mempelajari semua mata pelajaran secara umum sebelum memilih kelompok mata pelajaran pilihan di Kelas XI.</p>
                            <div class="trainer d-flex justify-content-between align-items-center border-top pt-3">
                                <div class="info-text"><i class="bi bi-star me-1"></i> Pondasi Dasar</div>
                                <div class="info-text"><i class="bi bi-puzzle me-1"></i> P5 (Proyek)</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="section bg-light py-5">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <h4 class="fw-bold"><i class="bi bi-calendar-check text-success me-2"></i> Kalender Pendidikan</h4>
                        <p>Lihat jadwal efektif belajar, ujian tengah semester, akhir semester, serta hari libur nasional untuk tahun ajaran 2025/2026.</p>
                        <a href="#" class="btn btn-outline-success btn-sm">Unduh Jadwal (.pdf)</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4 bg-white rounded shadow-sm h-100">
                        <h4 class="fw-bold"><i class="bi bi-journal-text text-success me-2"></i> Tata Tertib Akademik</h4>
                        <p>Panduan standar penilaian, kriteria kenaikan kelas, dan kewajiban siswa selama menempuh pendidikan di SMAN 1 Pabuaran.</p>
                        <a href="#" class="btn btn-outline-success btn-sm">Baca Aturan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


@endsection