@extends('layouts.admin')

@section('title', 'Tambah Sambutan')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-body">

            <form action="{{ route('admin.principals.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <input type="text"
                    name="name"
                    class="form-control mb-2"
                    placeholder="Nama Kepala Sekolah">

                <input type="text"
                    name="position"
                    class="form-control mb-2"
                    placeholder="Jabatan">

                <textarea name="message"
                    class="form-control mb-2"
                    rows="5"
                    placeholder="Isi Sambutan"></textarea>

                <input type="file"
                    name="photo"
                    class="form-control mb-3">

                <button class="btn btn-success">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection