@extends('layouts.admin')

@section('title', 'Tambah Prestasi Ekstrakurikuler')

@section('content')

<div class="container">

    <div class="card shadow-sm border-0">

        <div class="card-header">
            <h4 class="mb-0">Tambah Prestasi</h4>
        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.extracurricular-achievements.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">
                        Judul Prestasi
                    </label>

                    <input
                        type="text"
                        name="title"
                        class="form-control"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        name="description"
                        rows="4"
                        class="form-control"></textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Gambar
                    </label>

                    <input
                        type="file"
                        name="image"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Urutan
                    </label>

                    <input
                        type="number"
                        name="sort_order"
                        value="0"
                        class="form-control">

                </div>

                <div class="form-check mb-4">

                    <input
                        type="checkbox"
                        class="form-check-input"
                        checked
                        name="is_active">

                    <label class="form-check-label">
                        Aktif
                    </label>

                </div>

                <button class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('admin.extracurricular-achievements.index') }}"
                    class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

@endsection