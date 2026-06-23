<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| CONTROLLERS
|--------------------------------------------------------------------------
*/

// Core
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

// Profil
use App\Http\Controllers\SejarahVisiMisiController;
use App\Http\Controllers\GuruStaffController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\FasilitasController;

// Akademik
use App\Http\Controllers\AkademikController;

// Ekstrakurikuler
use App\Http\Controllers\ExtracurricularPageController;

// Berita & Pengumuman
use App\Http\Controllers\BeritaAcaraController;
use App\Http\Controllers\AnnouncementController;

// Admin
use App\Http\Controllers\Admin\VisionMissionController;

// Frontend
use App\Http\Controllers\Frontend\ContactPageController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| BERANDA
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('beranda');

/*
|--------------------------------------------------------------------------
| PROFIL SEKOLAH
|--------------------------------------------------------------------------
*/
Route::prefix('profil')
    ->name('frontend.profil.')
    ->group(function () {

        // Sejarah & Visi Misi
        Route::get(
            '/sejarah-visi-misi',
            [SejarahVisiMisiController::class, 'index']
        )->name('sejarahvisimisi');

        Route::get(
            '/sejarah-visi-misi/{sejarah:slug}',
            [SejarahVisiMisiController::class, 'show']
        )->name('sejarahvisimisi.show');

        // Guru & Staff
        Route::get(
            '/guru-staff',
            [GuruStaffController::class, 'index']
        )->name('guru-staff');

        Route::get(
            '/guru-staff/{guru:slug}',
            [GuruStaffController::class, 'show']
        )->name('guru-staff.show');

        // Struktur Organisasi
        Route::get(
            '/struktur-organisasi',
            [StrukturOrganisasiController::class, 'index']
        )->name('struktur-organisasi');

        // Fasilitas
        Route::get(
            '/fasilitas',
            [FasilitasController::class, 'index']
        )->name('fasilitas');
    });

/*
|--------------------------------------------------------------------------
| AKADEMIK
|--------------------------------------------------------------------------
*/
Route::prefix('akademik')
    ->name('frontend.akademik.')
    ->group(function () {

        Route::get(
            '/',
            [AkademikController::class, 'index']
        )->name('index');

        Route::get(
            '/{akademik:slug}',
            [AkademikController::class, 'show']
        )->name('show');

        Route::get(
            '/akademik',
            [AcademicController::class, 'index']
        )->name('academic');
    });

/*
|--------------------------------------------------------------------------
| EKSTRAKURIKULER
|--------------------------------------------------------------------------
*/
Route::prefix('ekstrakurikuler')
    ->name('frontend.extracurriculars.')
    ->group(function () {

        Route::get(
            '/',
            [ExtracurricularPageController::class, 'index']
        )->name('index');

        Route::get(
            '/{ekstrakurikuler:slug}',
            [ExtracurricularPageController::class, 'show']
        )->name('show');
    });

/*
|--------------------------------------------------------------------------
| BERITA ACARA
|--------------------------------------------------------------------------
*/
Route::prefix('berita')
    ->name('frontend.berita.')
    ->group(function () {

        Route::get(
            '/',
            [BeritaAcaraController::class, 'index']
        )->name('index');

        Route::get(
            '/{slug}',
            [BeritaAcaraController::class, 'show']
        )->name('show');
    });

/*
|--------------------------------------------------------------------------
| PENGUMUMAN / ANNOUNCEMENT
|--------------------------------------------------------------------------
*/
Route::prefix('pengumuman')
    ->name('frontend.announcements.')
    ->group(function () {

        Route::get(
            '/',
            [AnnouncementController::class, 'index']
        )->name('index');

        Route::get(
            '/{announcement:slug}',
            [AnnouncementController::class, 'show']
        )->name('show');

        Route::get(
            '/category/{category}',
            [AnnouncementController::class, 'category']
        )->name('category');

        Route::get(
            '/date/{date}',
            [AnnouncementController::class, 'date']
        )->name('date');

        Route::get(
            '/search',
            [AnnouncementController::class, 'search']
        )->name('search');

        Route::get(
            '/tag/{tag}',
            [AnnouncementController::class, 'tag']
        )->name('tag');

        Route::get(
            '/active',
            [AnnouncementController::class, 'active']
        )->name('active');
    });

/*
|--------------------------------------------------------------------------
| KONTAK
|--------------------------------------------------------------------------
*/

Route::get('/kontak', function () {
    return view('kontak');
})->name('frontend.kontak');

Route::get(
    '/kontak',
    [ContactPageController::class, 'index']
)->name('frontend.kontak');

Route::post(
    '/kontak',
    [ContactPageController::class, 'store']
)->name('frontend.kontak.store');

Route::get(
    '/kontak',
    [ContactPageController::class, 'index']
)->name('frontend.kontak');

Route::post(
    '/kontak/kirim',
    [ContactPageController::class, 'send']
)->name('frontend.kontak.send');

/*
|--------------------------------------------------------------------------
| DASHBOARD (USER)
|--------------------------------------------------------------------------
*/
Route::get(
    '/dashboard',
    [DashboardController::class, 'index']
)
    ->middleware(['auth'])
    ->name('dashboard');

/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::prefix('admin')
    ->middleware(['auth'])
    ->name('admin.')
    ->group(function () {

        Route::get(
            '/dashboard',
            [App\Http\Controllers\Admin\AdminDashboardController::class, 'index']
        )->name('dashboard');

        Route::resource('users', \App\Http\Controllers\Admin\UserController::class);

        Route::resource(
            'sliders',
            App\Http\Controllers\Admin\AdminHeroSliderController::class
        );

        Route::resource(
            'statistics',
            App\Http\Controllers\Admin\AdminStatisticController::class
        );

        Route::resource(
            'announcements',
            App\Http\Controllers\Admin\AdminAnnouncementController::class
        );

        Route::resource(
            'principals',
            App\Http\Controllers\Admin\AdminPrincipalController::class
        );

        Route::resource(
            'news',
            App\Http\Controllers\Admin\AdminNewsController::class
        );

        Route::resource(
            'histories',
            App\Http\Controllers\Admin\AdminHistoryController::class
        );

        Route::resource(
            'visimisi',
            App\Http\Controllers\Admin\VisionMissionController::class
        );

        Route::resource(
            'organizations',
            App\Http\Controllers\Admin\AdminOrganizationController::class
        );

        Route::resource(
            'teachers',
            App\Http\Controllers\Admin\AdminTeacherController::class
        );

        Route::resource(
            'facilities',
            App\Http\Controllers\Admin\AdminFacilityController::class
        );

        Route::resource(
            'academic-programs',
            App\Http\Controllers\Admin\AcademicProgramController::class
        );

        Route::resource(
            'academic-schedules',
            App\Http\Controllers\Admin\AcademicScheduleController::class
        );

        Route::resource(
            'featured-programs',
            App\Http\Controllers\Admin\FeaturedProgramController::class
        );

        Route::resource(
            'extracurriculars',
            App\Http\Controllers\Admin\ExtracurricularController::class
        );

        Route::resource(
            'extracurricular-achievements',
            App\Http\Controllers\Admin\ExtracurricularAchievementsController::class
        );

        Route::resource(
            'contact-settings',
            App\Http\Controllers\Admin\ContactController::class
        );

        Route::resource(
            'contact-messages',
            App\Http\Controllers\Admin\ContactMessageController::class
        )->only([
            'index',
            'show',
            'destroy'
        ]);

        Route::resource(
            'contacts',
            App\Http\Controllers\Admin\ContactController::class
        );

        Route::get(
            'contact-messages',
            [App\Http\Controllers\Admin\ContactMessageController::class, 'index']
        )->name('contact-messages.index');

        Route::get(
            'contact-messages/{contactMessage}',
            [App\Http\Controllers\Admin\ContactMessageController::class, 'show']
        )->name('contact-messages.show');

        Route::delete(
            'contact-messages/{contactMessage}',
            [App\Http\Controllers\Admin\ContactMessageController::class, 'destroy']
        )->name('contact-messages.destroy');

        /*
        |--------------------------------------------------------------------------
        | FOOTER SETTINGS
        |--------------------------------------------------------------------------
        */
        Route::get(
            'footer-settings',
            [App\Http\Controllers\Admin\FooterSettingController::class, 'index']
        )->name('footer-settings.index');

        Route::post(
            'footer-settings',
            [App\Http\Controllers\Admin\FooterSettingController::class, 'store']
        )->name('footer-settings.store');

        /*
        |--------------------------------------------------------------------------
        | HEADER SETTINGS
        |--------------------------------------------------------------------------
        */
        Route::get(
            'header-settings',
            [App\Http\Controllers\Admin\HeaderSettingController::class, 'index']
        )->name('header-settings.index');

        Route::post(
            'header-settings',
            [App\Http\Controllers\Admin\HeaderSettingController::class, 'store']
        )->name('header-settings.store');

        Route::put(
            'header-settings',
            [App\Http\Controllers\Admin\HeaderSettingController::class, 'update']
        )->name('header-settings.update');
    });

/*
|--------------------------------------------------------------------------
| AUTH ROUTES
|--------------------------------------------------------------------------
*/
require __DIR__ . '/auth.php';
