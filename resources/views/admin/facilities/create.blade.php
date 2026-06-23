@extends('layouts.admin')

@section('title','Tambah Fasilitas')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.facilities.store') }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label>Nama Fasilitas</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label>Jenis</label>
                <input type="text" name="type" class="form-control">
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Jumlah</label>
                <input type="number" name="qty" class="form-control" value="1">
            </div>

            <div class="mb-3">
                <label>Foto</label>
                <input type="file" name="photo" class="form-control">
            </div>

            <div class="mb-3">
                <label>Urutan</label>
                <input type="number" name="sort_order" class="form-control" value="0">
            </div>

            <button class="btn btn-success">
                Simpan
            </button>

        </form>

    </div>
</div>

@endsection