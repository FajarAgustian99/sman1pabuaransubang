<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - @yield('title')</title>




    <link href="{{ asset('assets/img/logo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <style>
        body {
            background: #f4f7fc;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            width: 280px;
            min-height: 100vh;
            background: linear-gradient(180deg, #0d6efd 0%, #084298 100%);
            overflow-y: auto;
            position: sticky;
            top: 0;
        }

        .sidebar-brand {
            font-weight: 700;
            font-size: 1.1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .sidebar .nav-link {
            color: rgba(255, 255, 255, .85);
            border-radius: 10px;
            padding: .7rem 1rem;
            transition: all .3s ease;
            margin-bottom: 4px;
        }

        .sidebar .nav-link:hover {
            background: rgba(255, 255, 255, .15);
            color: #fff;
            transform: translateX(3px);
        }

        .sidebar .nav-link.active {
            background: rgba(255, 255, 255, .2);
            color: #fff;
            font-weight: 600;
        }

        .sidebar-section {
            color: rgba(255, 255, 255, .6);
            font-size: .75rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-top: 1.5rem;
            margin-bottom: .5rem;
            text-transform: uppercase;
            padding-left: 1rem;
        }

        .content-wrapper {
            flex-grow: 1;
            padding: 25px;
            min-width: 0;
            /* Mencegah overflow flexbox */
        }

        .topbar {
            background: white;
            padding: 15px 25px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
            margin-bottom: 25px;
        }

        .content-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .05);
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, .3);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="d-flex">

        <aside class="sidebar text-white p-3">
            <div class="sidebar-brand d-flex align-items-center gap-2 pb-3 mb-3 text-white">
                <i class="bi bi-person-circle fs-4"></i>
                <span class="text-truncate fw-semibold">Admin SMAN 1 Pabuaran</span>
            </div>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="bi bi-speedometer2 me-2"></i>
                        Dashboard
                    </a>
                </li>

                <li class="sidebar-section">Halaman Beranda</li>

                <li class="nav-item">
                    <a href="{{ route('admin.sliders.index') }}" class="nav-link {{ request()->routeIs('admin.sliders.index') ? 'active' : '' }}">
                        <i class="bi bi-images me-2"></i> Hero Slider
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.announcements.index') }}" class="nav-link {{ request()->routeIs('admin.announcements.index') ? 'active' : '' }}">
                        <i class="bi bi-megaphone me-2"></i> Pengumuman
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.statistics.index') }}" class="nav-link {{ request()->routeIs('admin.statistics.index') ? 'active' : '' }}">
                        <i class="bi bi-bar-chart-line me-2"></i> Statistik Sekolah
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.principals.index') }}" class="nav-link {{ request()->routeIs('admin.principals.index') ? 'active' : '' }}">
                        <i class="bi bi-person-badge me-2"></i> Sambutan Kepsek
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->routeIs('admin.news.index') ? 'active' : '' }}">
                        <i class="bi bi-newspaper me-2"></i> Berita Sekolah
                    </a>
                </li>

                <li class="sidebar-section">Profil Sekolah</li>

                <li class="nav-item">
                    <a href="{{ route('admin.histories.index') }}" class="nav-link {{ request()->routeIs('admin.histories.index') ? 'active' : '' }}">
                        <i class="bi bi-clock-history me-2"></i> Sejarah Sekolah
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.visimisi.index') }}" class="nav-link {{ request()->routeIs('admin.visimisi.index') ? 'active' : '' }}">
                        <i class="bi bi-bullseye me-2"></i> Visi & Misi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.teachers.index') }}" class="nav-link {{ request()->routeIs('admin.teachers.index') ? 'active' : '' }}">
                        <i class="bi bi-people-fill me-2"></i> Guru & Staff
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.organizations.index') }}" class="nav-link {{ request()->routeIs('admin.organizations.index') ? 'active' : '' }}">
                        <i class="bi bi-diagram-3 me-2"></i> Struktur Organisasi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.facilities.index') }}" class="nav-link {{ request()->routeIs('admin.facilities.index') ? 'active' : '' }}">
                        <i class="bi bi-building me-2"></i> Fasilitas
                    </a>
                </li>

                <li class="sidebar-section">Akademik</li>

                <li class="nav-item">
                    <a href="{{ route('admin.academic-programs.index') }}" class="nav-link {{ request()->routeIs('admin.academic-programs.index') ? 'active' : '' }}">
                        <i class="bi bi-book me-2"></i> Program Academik
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.academic-schedules.index') }}" class="nav-link {{ request()->routeIs('admin.academic-schedules.index') ? 'active' : '' }}">
                        <i class="bi bi-calendar-event me-2"></i> Jadwal Akademik
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.featured-programs.index') }}" class="nav-link {{ request()->routeIs('admin.featured-programs.index') ? 'active' : '' }}">
                        <i class="bi bi-stars me-2"></i> Program Unggulan
                    </a>
                </li>

                <li class="sidebar-section">Kesiswaan</li>

                <li class="nav-item">
                    <a href="{{ route('admin.extracurriculars.index') }}" class="nav-link {{ request()->routeIs('admin.extracurriculars.index') ? 'active' : '' }}">
                        <i class="bi bi-trophy me-2"></i> Ekstrakurikuler
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.extracurricular-achievements.index') }}" class="nav-link {{ request()->routeIs('admin.extracurricular-achievements.index') ? 'active' : '' }}">
                        <i class="bi bi-award me-2"></i> Prestasi Ekskul
                    </a>
                </li>

                <li class="sidebar-section">Kontak</li>

                <li class="nav-item">
                    <a href="{{ route('admin.contact-settings.index') }}" class="nav-link {{ request()->routeIs('admin.contact-settings.index') ? 'active' : '' }}">
                        <i class="bi bi-gear me-2"></i> Pengaturan Kontak
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.contact-messages.index') }}" class="nav-link {{ request()->routeIs('admin.contact-messages.index') ? 'active' : '' }}">
                        <i class="bi bi-envelope me-2"></i> Pesan Masuk
                    </a>
                </li>

                <li class="sidebar-section">Pengaturan Website</li>



                <li class="nav-item">
                    <a href="{{ route('admin.contact-settings.index') }}" class="nav-link {{ request()->routeIs('admin.contact-settings.index') ? 'active' : '' }}">
                        <i class="bi bi-telephone me-2"></i> Kontak Website
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.header-settings.index') }}" class="nav-link {{ request()->routeIs('admin.header-settings.index') ? 'active' : '' }}">
                        <i class="bi bi-layout-text-sidebar-reverse me-2"></i> Pengaturan Header
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.footer-settings.index') }}" class="nav-link {{ request()->routeIs('admin.footer-settings.index') ? 'active' : '' }}">
                        <i class="bi bi-layout-text-sidebar-reverse me-2"></i> Pengaturan Footer
                    </a>
                </li>


                <li class="sidebar-section">Manajemen User</li>

                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}"
                        class="nav-link {{ request()->routeIs('admin.users.index') ? 'active' : '' }}">
                        <i class="bi bi-person-plus me-2"></i> Data User
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.users.create') }}"
                        class="nav-link {{ request()->routeIs('admin.users.create') ? 'active' : '' }}">
                        <i class="bi bi-person-add me-2"></i> Tambah User
                    </a>
                </li>

                <li class="nav-item mt-4 pt-3 border-top border-translucent">
                    <form action="{{ route('logout') }}" method="POST" class="px-2">
                        @csrf
                        <button type="submit" class="btn btn-danger w-100 btn-sm py-2">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </aside>

        <main class="content-wrapper">
            <header class="topbar d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-0 fw-bold">@yield('title')</h5>
                </div>
                <div>
                    <span class="text-muted small fw-semibold">
                        <i class="bi bi-shield-check me-1"></i> Admin SMAN 1 Pabuaran
                    </span>
                </div>
            </header>

            <div class="content-card">
                @yield('content')
            </div>
        </main>

    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#userTable').DataTable({
                "pageLength": 10,
                "language": {
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ data",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "paginate": {
                        "previous": "Sebelumnya",
                        "next": "Selanjutnya"
                    }
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>