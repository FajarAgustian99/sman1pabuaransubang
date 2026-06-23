@extends('layouts.admin')

@section('title','Tambah Struktur Organisasi')

@section('content')

<div class="card">
    <div class="card-body">

        <form
            action="{{ route('admin.organizations.store') }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label>Jabatan</label>
                <input type="text"
                    name="position"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Nama</label>
                <input type="text"
                    name="name"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Foto</label>
                <input type="file"
                    name="photo"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Urutan Tampil</label>
                <input type="number"
                    name="sort_order"
                    value="0"
                    class="form-control">
            </div>

            <button class="btn btn-success">
                Simpan
            </button>

        </form>

    </div>
</div>

@endsection