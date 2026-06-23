@extends('layouts.admin')

@section('title', 'Tambah Sejarah')

@section('content')

<form action="{{ route('admin.histories.store') }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf

    <div class="mb-3">
        <label>Judul</label>
        <input type="text"
            name="title"
            class="form-control">
    </div>

    <div class="mb-3">
        <label>Gambar</label>
        <input type="file"
            name="image"
            class="form-control">
    </div>

    <div class="mb-3">
        <label>Isi Sejarah</label>
        <textarea name="content"
            rows="8"
            class="form-control"></textarea>
    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

@endsection