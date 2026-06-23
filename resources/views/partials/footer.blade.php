<footer id="footer"
    class="footer position-relative light-background border-top">

    <div class="container footer-top py-5">

        <div class="row gy-4">

            {{-- Profil Sekolah --}}
            <div class="col-lg-5 col-md-12">

                <a href="{{ route('beranda') }}"
                    class="logo d-flex align-items-center">

                    <span class="sitename">
                        {{ $footerSetting->school_name ?? 'SMAN 1 PABUARAN' }}
                    </span>

                </a>

                <p class="mt-3">

                    {{ $footerSetting->description ?? 'Website resmi SMAN 1 Pabuaran Subang.' }}

                </p>

                <div class="social-links d-flex mt-4">

                    @if(!empty($footerSetting?->facebook))
                    <a href="{{ $footerSetting->facebook }}"
                        target="_blank"
                        class="me-3 fs-5">

                        <i class="bi bi-facebook"></i>

                    </a>
                    @endif

                    @if(!empty($footerSetting?->instagram))
                    <a href="{{ $footerSetting->instagram }}"
                        target="_blank"
                        class="me-3 fs-5">

                        <i class="bi bi-instagram"></i>

                    </a>
                    @endif

                    @if(!empty($footerSetting?->youtube))
                    <a href="{{ $footerSetting->youtube }}"
                        target="_blank"
                        class="me-3 fs-5">

                        <i class="bi bi-youtube"></i>

                    </a>
                    @endif

                </div>

            </div>

            {{-- Tautan Cepat --}}
            <div class="col-lg-3 col-6 footer-links">

                <h4>Tautan Cepat</h4>

                <ul class="list-unstyled">

                    <li class="mb-2">
                        <a href="{{ $footerSetting?->spmb_url ?? '#' }}"
                            target="_blank"
                            class="text-decoration-none text-muted">
                            Pendaftaran SPMB
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ route('frontend.akademik.index') }}"
                            class="text-decoration-none text-muted">
                            Kalender Akademik
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="{{ $headerSetting?->elearning_url ?? '#' }}"
                            target="_blank"
                            class="text-decoration-none text-muted">
                            E-Learning
                        </a>
                    </li>

                    <li class="mb-2">
                        <a href="#"
                            class="text-decoration-none text-muted">
                            Perpustakaan Digital
                        </a>
                    </li>

                </ul>

            </div>

            {{-- Kontak --}}
            <div class="col-lg-4 col-md-12">

                <h4>Hubungi Kami</h4>

                <p class="mb-1">

                    <strong>Alamat:</strong>

                    {{ $footerSetting->address ?? ($contactSetting->address ?? '-') }}

                </p>

                <p class="mb-1">

                    <strong>Telepon:</strong>

                    {{ $footerSetting->phone ?? ($contactSetting->phone ?? '-') }}

                </p>

                <p class="mb-1">

                    <strong>Email:</strong>

                    {{ $footerSetting->email ?? ($contactSetting->email ?? '-') }}

                </p>

                <p>

                    <strong>Operasional:</strong>

                    {{ $footerSetting->working_hours ?? '-' }}

                </p>

            </div>

        </div>

    </div>

    {{-- Copyright --}}
    <div class="container copyright text-center py-4 border-top">

        <p>

            ©

            <span>
                {{ $footerSetting->copyright_year ?? date('Y') }}
            </span>

            <strong class="px-1">

                {{ $footerSetting->copyright_name ?? 'SMAN 1 Pabuaran Subang' }}

            </strong>

            . All Rights Reserved

        </p>

    </div>

</footer>

<a href="#"
    id="scroll-top"
    class="scroll-top d-flex align-items-center justify-content-center">

    <i class="bi bi-arrow-up-short"></i>

</a>

<div id="preloader"></div>