@extends('layouts.admin')

@section('title', 'Tambah Program Unggulan')

@section('content')

<h3 class="fw-bold mb-4">Tambah Program Unggulan</h3>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('admin.featured-programs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            {{-- Judul Program --}}
            <div class="mb-3">
                <label class="form-label">Judul Program</label>
                <input type="text"
                    name="title"
                    class="form-control"
                    value="{{ old('title') }}"
                    required>
            </div>

            {{-- Gambar --}}
            <div class="mb-3">
                <label class="form-label">Gambar Program</label>
                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/*">
                <small class="text-muted">Format: jpg, png, jpeg (Max 2MB)</small>
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description"
                    class="form-control"
                    rows="4"
                    required>{{ old('description') }}</textarea>
            </div>

            {{-- Urutan --}}
            <div class="mb-3">
                <label class="form-label">Urutan Tampilan</label>
                <input type="number"
                    name="sort_order"
                    class="form-control"
                    value="{{ old('sort_order', 0) }}">
            </div>

            {{-- Status --}}
            <div class="form-check mb-4">
                <input class="form-check-input"
                    type="checkbox"
                    name="is_active"
                    value="1"
                    checked>

                <label class="form-check-label">
                    Aktifkan Program
                </label>
            </div>

            {{-- Button --}}
            <div class="d-flex gap-2">
                <button class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('admin.featured-programs.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>

    </div>
</div>

@endsection