<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Panel - @yield('title') </title> <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="d-flex"> <!-- Sidebar -->
        <div class="bg-dark text-white p-3" style="width: 260px; min-height: 100vh;">
            <h4 class="mb-4"> Admin Panel </h4>
            <ul class="nav flex-column">

                {{-- Dashboard --}}
                <li class="nav-item mb-3">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link text-white">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>

                {{-- ================= HOME ================= --}}
                <li class="text-uppercase text-secondary small fw-bold mt-3 mb-2">
                    Halaman Beranda
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.sliders.index') }}" class="nav-link text-white">
                        <i class="bi bi-images me-2"></i>
                        Hero Slider
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.announcements.index') }}" class="nav-link text-white">
                        <i class="bi bi-megaphone me-2"></i>
                        Pengumuman
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.statistics.index') }}" class="nav-link text-white">
                        <i class="bi bi-bar-chart-line me-2"></i>
                        Statistik Sekolah
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.principals.index') }}" class="nav-link text-white">
                        <i class="bi bi-person-badge me-2"></i>
                        Sambutan Kepala Sekolah
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.news.index') }}" class="nav-link text-white">
                        <i class="bi bi-newspaper me-2"></i>
                        Berita Sekolah
                    </a>
                </li>

                {{-- ================= PROFIL ================= --}}
                <li class="text-uppercase text-secondary small fw-bold mt-4 mb-2">
                    Profil Sekolah
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.histories.index') }}" class="nav-link text-white">
                        <i class="bi bi-clock-history me-2"></i>
                        Sejarah Sekolah
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.visimisi.index') }}" class="nav-link text-white">
                        <i class="bi bi-bullseye me-2"></i>
                        Visi & Misi
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.organizations.index') }}" class="nav-link text-white">
                        <i class="bi bi-diagram-3 me-2"></i>
                        Struktur Organisasi
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.teachers.index') }}" class="nav-link text-white">
                        <i class="bi bi-people-fill me-2"></i>
                        Guru & Staff
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.facilities.index') }}" class="nav-link text-white">
                        <i class="bi bi-building me-2"></i>
                        Fasilitas
                    </a>
                </li>

                {{-- ================= AKADEMIK ================= --}}
                <li class="text-uppercase text-secondary small fw-bold mt-4 mb-2">
                    Akademik
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.curriculums.index') }}" class="nav-link text-white">
                        <i class="bi bi-journal-bookmark me-2"></i>
                        Kurikulum
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.programs.index') }}" class="nav-link text-white">
                        <i class="bi bi-award me-2"></i>
                        Program Unggulan
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.extracurriculars.index') }}" class="nav-link text-white">
                        <i class="bi bi-trophy me-2"></i>
                        Ekstrakurikuler
                    </a>
                </li>

                {{-- ================= INFORMASI ================= --}}
                <li class="text-uppercase text-secondary small fw-bold mt-4 mb-2">
                    Informasi
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.agendas.index') }}" class="nav-link text-white">
                        <i class="bi bi-calendar-event me-2"></i>
                        Agenda Sekolah
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.achievements.index') }}" class="nav-link text-white">
                        <i class="bi bi-patch-check me-2"></i>
                        Prestasi
                    </a>
                </li>

                {{-- ================= PPDB ================= --}}
                <li class="text-uppercase text-secondary small fw-bold mt-4 mb-2">
                    PPDB
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.ppdb.index') }}" class="nav-link text-white">
                        <i class="bi bi-person-plus me-2"></i>
                        Informasi PPDB
                    </a>
                </li>

                {{-- ================= GALERI ================= --}}
                <li class="text-uppercase text-secondary small fw-bold mt-4 mb-2">
                    Galeri
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.galleries.index') }}" class="nav-link text-white">
                        <i class="bi bi-images me-2"></i>
                        Galeri Foto
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.videos.index') }}" class="nav-link text-white">
                        <i class="bi bi-camera-video me-2"></i>
                        Galeri Video
                    </a>
                </li>

                {{-- ================= PENGATURAN ================= --}}
                <li class="text-uppercase text-secondary small fw-bold mt-4 mb-2">
                    Pengaturan Website
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.settings.index') }}" class="nav-link text-white">
                        <i class="bi bi-gear me-2"></i>
                        Pengaturan Umum
                    </a>
                </li>

            </ul>
        </div> <!-- Content -->
        <div class="flex-grow-1 p-4"> @yield('content') </div>
    </div>
</body>

</html>