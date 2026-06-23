@extends('layouts.admin')

@section('title', 'Tambah Pengumuman')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-body">

            <form action="{{ route('admin.announcements.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <input type="text" name="title" class="form-control mb-2" placeholder="Judul">

                <textarea name="description" class="form-control mb-2" placeholder="Deskripsi"></textarea>

                <input type="text" name="category" class="form-control mb-2" placeholder="Kategori">

                <input type="date" name="announcement_date" class="form-control mb-2">

                <input type="file" name="image" class="form-control mb-2">

                <input type="text" name="button_text" class="form-control mb-2" placeholder="Tombol Text">

                <select name="button_color" class="form-control mb-3">
                    <option value="primary">Primary</option>
                    <option value="success">Success</option>
                    <option value="danger">Danger</option>
                </select>

                <button class="btn btn-success">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection