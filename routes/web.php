<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SejarahVisiMisiController;
use App\Http\Controllers\GuruStaffController;
use App\Http\Controllers\StrukturOrganisasiController;

use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('beranda');



Route::get('/sejarahvisimisi', [SejarahVisiMisiController::class, 'index'])->name('sejarahvisimisi');

Route::get('/guru-staff', [GuruStaffController::class, 'index'])->name('guru-staff');

Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur-organisasi');
