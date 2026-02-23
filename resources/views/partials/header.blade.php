<header id="header" class="header d-flex align-items-center sticky-top shadow-sm">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <h1 class="sitename">SMAN 1 PABUARAN</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('beranda') }}" class="active">Beranda</a></li>
                <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="{{ route('sejarahvisimisi') }}">Sejarah & Visi Misi</a></li>
                        <li><a href="{{ route('guru-staff') }}">Guru & Staff</a></li>
                        <li><a href="{{ route('struktur-organisasi') }}">Struktur Organisasi</a></li>
                        <li><a href="fasilitas.html">Fasilitas</a></li>
                    </ul>
                </li>
                <li><a href="akademik.html">Akademik</a></li>
                <li><a href="ekstrakurikuler.html">Ekstrakurikuler</a></li>
                <li><a href="events.html">Berita & Acara</a></li>
                <li><a href="contact.html">Kontak</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
        <a class="btn-getstarted" href="ppdb.html">SPMB Online</a>
    </div>
</header>