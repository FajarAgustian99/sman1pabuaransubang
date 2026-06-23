@extends('layouts.admin')

@section('title', 'Edit Pengumuman')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header">
            <h5 class="mb-0">Edit Pengumuman</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.announcements.update', $announcement->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <!-- Judul -->
                <input type="text"
                    name="title"
                    class="form-control mb-2"
                    value="{{ $announcement->title }}"
                    placeholder="Judul">

                <!-- Deskripsi -->
                <textarea name="description"
                    class="form-control mb-2"
                    rows="4"
                    placeholder="Deskripsi">{{ $announcement->description }}</textarea>

                <!-- Kategori -->
                <input type="text"
                    name="category"
                    class="form-control mb-2"
                    value="{{ $announcement->category }}"
                    placeholder="Kategori (SPMB, Akademik, dll)">

                <!-- Tanggal -->
                <input type="date"
                    name="announcement_date"
                    class="form-control mb-2"
                    value="{{ $announcement->announcement_date }}">

                <!-- Gambar Saat Ini -->
                @if ($announcement->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $announcement->image) }}"
                        width="200"
                        class="rounded">
                </div>
                @endif

                <!-- Upload Gambar Baru -->
                <input type="file"
                    name="image"
                    class="form-control mb-2">

                <!-- Tombol Text -->
                <input type="text"
                    name="button_text"
                    class="form-control mb-2"
                    value="{{ $announcement->button_text }}"
                    placeholder="Teks Tombol">

                <!-- Warna Tombol -->
                <select name="button_color"
                    class="form-control mb-3">

                    <option value="primary" {{ $announcement->button_color == 'primary' ? 'selected' : '' }}>
                        Primary
                    </option>

                    <option value="success" {{ $announcement->button_color == 'success' ? 'selected' : '' }}>
                        Success
                    </option>

                    <option value="danger" {{ $announcement->button_color == 'danger' ? 'selected' : '' }}>
                        Danger
                    </option>

                    <option value="warning" {{ $announcement->button_color == 'warning' ? 'selected' : '' }}>
                        Warning
                    </option>

                </select>

                <button class="btn btn-primary">
                    Update Pengumuman
                </button>

                <a href="{{ route('admin.announcements.index') }}"
                    class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection