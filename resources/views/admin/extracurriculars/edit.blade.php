@extends('layouts.admin')

@section('title', 'Edit Ekstrakurikuler')

@section('content')
<div class="container">

    <div class="card shadow-sm">

        <div class="card-header">
            <h4>Edit Ekstrakurikuler</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.extracurriculars.update', $extracurricular->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama</label>

                    <input type="text"
                        name="name"
                        value="{{ old('name', $extracurricular->name) }}"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Pembina</label>

                    <input type="text"
                        name="coach"
                        value="{{ old('coach', $extracurricular->coach) }}"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jadwal</label>

                    <input type="text"
                        name="schedule"
                        value="{{ old('schedule', $extracurricular->schedule) }}"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>

                    <textarea
                        name="description"
                        rows="5"
                        class="form-control">{{ old('description', $extracurricular->description) }}</textarea>
                </div>

                @if($extracurricular->image)
                <div class="mb-3">
                    <img src="{{ asset('storage/'.$extracurricular->image) }}"
                        width="200"
                        class="img-thumbnail">
                </div>
                @endif

                <div class="mb-3">
                    <label class="form-label">
                        Ganti Gambar
                    </label>

                    <input type="file"
                        name="image"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Urutan
                    </label>

                    <input type="number"
                        name="sort_order"
                        value="{{ $extracurricular->sort_order }}"
                        class="form-control">
                </div>

                <div class="form-check mb-3">

                    <input type="checkbox"
                        name="is_active"
                        value="1"
                        class="form-check-input"
                        {{ $extracurricular->is_active ? 'checked' : '' }}>

                    <label class="form-check-label">
                        Aktif
                    </label>

                </div>

                <button class="btn btn-warning">
                    Update
                </button>

                <a href="{{ route('admin.extracurriculars.index') }}"
                    class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>
@endsection