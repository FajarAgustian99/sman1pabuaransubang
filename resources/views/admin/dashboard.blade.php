@extends('layouts.admin') @section('title', 'Dashboard') @section('content') <div class="container-fluid">
    <div class="mb-4">
        <h2 class="fw-bold"> Dashboard Admin </h2>
        <p class="text-muted"> Selamat datang di panel admin website sekolah. </p>
    </div>
    <div class="row g-4"> <!-- Slider -->
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted"> Hero Slider </h6>
                            <h2 class="fw-bold"> {{ $totalSliders }} </h2>
                        </div> <i class="bi bi-images fs-1 text-primary"></i>
                    </div>
                </div>
            </div>
        </div> <!-- Pengumuman -->
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted"> Pengumuman </h6>
                            <h2 class="fw-bold"> {{ $totalAnnouncements }} </h2>
                        </div> <i class="bi bi-megaphone fs-1 text-success"></i>
                    </div>
                </div>
            </div>
        </div> <!-- Statistik -->
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted"> Statistik </h6>
                            <h2 class="fw-bold"> {{ $totalStatistics }} </h2>
                        </div> <i class="bi bi-bar-chart-line fs-1 text-warning"></i>
                    </div>
                </div>
            </div>
        </div> <!-- Kepala Sekolah -->
        <div class="col-lg-3 col-md-6">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="text-muted"> Kepala Sekolah </h6>
                            <h2 class="fw-bold"> {{ $totalPrincipals }} </h2>
                        </div> <i class="bi bi-person-badge fs-1 text-danger"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @endsection