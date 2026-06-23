@extends('layouts.admin')

@section('title', 'Tambah Program Akademik')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0">Tambah Program Akademik</h4>

    <a href="{{ route('admin.academic-programs.index') }}" class="btn btn-secondary">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('admin.academic-programs.store') }}" method="POST">
            @csrf

            {{-- TITLE --}}
            <div class="mb-3">
                <label class="form-label">Judul Program</label>
                <input type="text"
                    name="title"
                    class="form-control @error('title') is-invalid @enderror"
                    placeholder="Contoh: Kurikulum Merdeka"
                    required>

                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- DESCRIPTION --}}
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description"
                    rows="5"
                    class="form-control @error('description') is-invalid @enderror"
                    placeholder="Jelaskan program akademik..."
                    required></textarea>

                @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- ICON (OPTIONAL) --}}
            <div class="mb-3">
                <label class="form-label">Icon (Bootstrap Icon Class)</label>
                <input type="text"
                    name="icon"
                    class="form-control"
                    placeholder="Contoh: bi-book / bi-laptop / bi-trophy">
                <small class="text-muted">
                    Gunakan class Bootstrap Icons (opsional)
                </small>
            </div>

            {{-- BUTTON --}}
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save me-1"></i> Simpan
            </button>

        </form>

    </div>
</div>

@endsection