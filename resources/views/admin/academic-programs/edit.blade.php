@extends('layouts.admin')

@section('title', 'Edit Program Akademik')

@section('content')

<h3 class="fw-bold mb-4">Edit Program Akademik</h3>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('admin.academic-programs.update', $program->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Judul Program --}}
            <div class="mb-3">
                <label class="form-label">Judul Program</label>
                <input type="text"
                    name="title"
                    class="form-control"
                    value="{{ old('title', $program->title) }}"
                    required>
            </div>

            {{-- Icon --}}
            <div class="mb-3">
                <label class="form-label">Icon (Bootstrap Icon Class)</label>
                <input type="text"
                    name="icon"
                    class="form-control"
                    value="{{ old('icon', $program->icon) }}"
                    placeholder="contoh: bi-book, bi-laptop, bi-trophy">
                <small class="text-muted">
                    Gunakan class Bootstrap Icons (https://icons.getbootstrap.com/)
                </small>
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

            {{-- Status Aktif --}}
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

                <a href="{{ route('admin.academic-programs.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>

    </div>
</div>

@endsection