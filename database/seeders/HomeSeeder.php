<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSlider;
use App\Models\SchoolStatistic;
use App\Models\Announcement;
use App\Models\Principal;

class HomeSeeder extends Seeder
{
    public function run(): void
    {
        HeroSlider::create([
            'title' => 'Membangun Masa Depan Gemilang',
            'subtitle' => 'Selamat Datang di Website Resmi SMAN 1 Pabuaran',
            'image' => 'sliders/kelas.jpg',
        ]);

        SchoolStatistic::insert([
            [
                'title' => 'Siswa Aktif',
                'total' => 1232,
                'color' => 'primary'
            ],
            [
                'title' => 'Guru & Staff',
                'total' => 65,
                'color' => 'success'
            ],
            [
                'title' => 'Ekstrakurikuler',
                'total' => 22,
                'color' => 'warning'
            ],
            [
                'title' => 'Laboratorium',
                'total' => 15,
                'color' => 'danger'
            ]
        ]);

        Announcement::create([
            'category' => 'SPMB',
            'title' => 'Hasil Seleksi SPMB Tahun Ajaran 2026/2027',
            'description' => 'Pengumuman hasil seleksi peserta didik baru.',
            'announcement_date' => now(),
            'image' => 'announcements/spmb.jpg',
            'button_text' => 'Lihat Pengumuman',
            'button_color' => 'success',
            'slug' => 'hasil-seleksi-spmb',
        ]);

        Principal::create([
            'name' => 'Drs. Ahmad Fauzi',
            'position' => 'Kepala Sekolah',
            'message' => 'Selamat datang di website resmi sekolah kami.',
            'photo' => 'principals/kepsek.jpg',
        ]);
    }
}
