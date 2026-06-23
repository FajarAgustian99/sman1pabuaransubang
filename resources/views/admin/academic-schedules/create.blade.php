@extends('layouts.admin')

@section('title', 'Tambah Jadwal Akademik')

@section('content')

<h3 class="fw-bold mb-4">Tambah Jadwal Akademik</h3>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('admin.academic-schedules.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Kegiatan</label>
                <input type="text" name="activity" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" name="activity_date" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Urutan</label>
                <input type="number" name="sort_order" class="form-control" value="0">
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('admin.academic-schedules.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>

    </div>
</div>

@endsection