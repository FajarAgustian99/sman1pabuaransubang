<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="{{ route('beranda') }}" class="logo d-flex align-items-center me-auto me-xl-0">
            @if($headerSetting?->logo)
            <img src="{{ asset('storage/' . $headerSetting->logo) }}"
                alt="{{ $headerSetting->school_name ?? 'Logo' }}"
                style="max-height: 55px;">
            @endif

            <h1 class="sitename mb-0 ms-2 fs-4 fw-bold text-truncate" style="max-width: 250px;">
                {{ $headerSetting?->school_name ?? 'SMAN 1 PABUARAN' }}
            </h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li>
                    <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">
                        Beranda
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="{{ request()->routeIs('frontend.profil.*') ? 'active' : '' }}">
                        <span>Profil</span>
                        <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('frontend.profil.sejarahvisimisi') }}" class="{{ request()->routeIs('frontend.profil.sejarahvisimisi') ? 'active' : '' }}">
                                Sejarah & Visi Misi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.profil.guru-staff') }}" class="{{ request()->routeIs('frontend.profil.guru-staff') ? 'active' : '' }}">
                                Guru & Staff
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.profil.struktur-organisasi') }}" class="{{ request()->routeIs('frontend.profil.struktur-organisasi') ? 'active' : '' }}">
                                Struktur Organisasi
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('frontend.profil.fasilitas') }}" class="{{ request()->routeIs('frontend.profil.fasilitas') ? 'active' : '' }}">
                                Fasilitas
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('frontend.akademik.index') }}" class="{{ request()->routeIs('frontend.akademik.*') ? 'active' : '' }}">
                        Akademik
                    </a>
                </li>

                <li>
                    <a href="{{ route('frontend.extracurriculars.index') }}" class="{{ request()->routeIs('frontend.extracurriculars.*') ? 'active' : '' }}">
                        Ekskul
                    </a>
                </li>

                <li>
                    <a href="{{ route('frontend.berita.index') }}" class="{{ request()->routeIs('frontend.berita.*') ? 'active' : '' }}">
                        Berita
                    </a>
                </li>

                <li>
                    <a href="{{ route('frontend.kontak') }}" class="{{ request()->routeIs('frontend.kontak') ? 'active' : '' }}">
                        Kontak
                    </a>
                </li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list ms-3"></i>
        </nav>



        <div class="header-buttons d-none d-xl-flex align-items-center gap-2 ms-3">
            @if($headerSetting?->elearning_url)
            <a class="btn-getstarted btn-elearning btn btn-sm"
                href="{{ $headerSetting->elearning_url }}"
                target="_blank">
                {{ $headerSetting->elearning_text ?? 'E-Learning' }}
            </a>
            @endif

            @if($headerSetting?->ppdb_url)
            <a class="btn-getstarted btn  btn-sm"
                href="{{ $headerSetting->ppdb_url }}"
                target="_blank">
                {{ $headerSetting->ppdb_text ?? 'PPDB' }}
            </a>
            @endif
        </div>

    </div>
</header>