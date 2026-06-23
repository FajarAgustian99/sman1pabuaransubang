@extends('layouts.admin')

@section('title', 'Edit Jadwal Akademik')

@section('content')

<h3 class="fw-bold mb-4">Edit Jadwal Akademik</h3>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <form action="{{ route('admin.academic-schedules.update', $schedule->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kegiatan</label>
                <input type="text"
                    name="activity"
                    class="form-control"
                    value="{{ $schedule->activity }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date"
                    name="activity_date"
                    class="form-control"
                    value="{{ $schedule->activity_date }}"
                    required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description"
                    class="form-control"
                    rows="3">{{ $schedule->description }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Urutan</label>
                <input type="number"
                    name="sort_order"
                    class="form-control"
                    value="{{ $schedule->sort_order }}">
            </div>

            <div class="d-flex gap-2">
                <button class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('admin.academic-schedules.index') }}" class="btn btn-secondary">
                    Kembali
                </a>
            </div>

        </form>

    </div>
</div>

@endsection