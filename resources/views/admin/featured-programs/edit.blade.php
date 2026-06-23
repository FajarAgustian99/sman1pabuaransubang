@extends('layouts.admin')

@section('title', 'Edit Program Unggulan')

@section('content')

<h3 class="fw-bold mb-4">Edit Program Unggulan</h3>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('admin.featured-programs.update', $program->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            {{-- Judul --}}
            <div class="mb-3">
                <label class="form-label">Judul Program</label>
                <input type="text"
                    name="title"
                    class="form-control"
                    value="{{ old('title', $program->title) }}"
                    required>
            </div>

            {{-- Gambar --}}
            <div class="mb-3">
                <label class="form-label">Ganti Gambar (opsional)</label>
                <input type="file"
                    name="image"
                    class="form-control"
                    accept="image/*">

                @if($program->image)
                <div class="mt-3">
                    <p class="mb-1 text-muted small">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $program->image) }}"
                        alt="Program Image"
                        class="img-thumbnail"
                        style="max-height: 180px;">
                </div>
                @endif
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description"
                    class="form-control"
                    rows="4"
                    required>{{ old('description', $program->description) }}</textarea>
            </div>

            {{-- Urutan --}}
            <div class="mb-3">
                <label class="form-label">Urutan Tampilan</label>
                <input type="number"
                    name="sort_order"
                    class="form-control"
                    value="{{ old('sort_order', $program->sort_order) }}">
            </div>

            {{-- Status --}}
            <div class="form-check mb-4">
                <input class="form-check-input"
                    type="checkbox"
                    name="is_active"
                    value="1"
                    {{ $program->is_active ? 'checked' : '' }}>

                <label class="form-check-label">
                    Aktifkan Program
                </label>
            </div>

            {{-- Button --}}
            <div class="d-flex gap-2">
                <button class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('admin.featured-programs.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>

    </div>
</div>

@endsection