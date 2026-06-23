@extends('layouts.admin')

@section('title', 'Tambah Ekstrakurikuler')

@section('content')
<div class="container">

    <div class="card shadow-sm">
        <div class="card-header">
            <h4>Tambah Ekstrakurikuler</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.extracurriculars.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Ekstrakurikuler</label>
                    <input type="text"
                        name="name"
                        class="form-control"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Pembina</label>
                    <input type="text"
                        name="coach"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jadwal</label>
                    <input type="text"
                        name="schedule"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea
                        name="description"
                        rows="5"
                        class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <input type="file"
                        name="image"
                        class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Urutan</label>
                    <input type="number"
                        name="sort_order"
                        value="0"
                        class="form-control">
                </div>

                <div class="form-check mb-3">
                    <input type="checkbox"
                        name="is_active"
                        value="1"
                        checked
                        class="form-check-input">

                    <label class="form-check-label">
                        Aktif
                    </label>
                </div>

                <button class="btn btn-primary">
                    Simpan
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