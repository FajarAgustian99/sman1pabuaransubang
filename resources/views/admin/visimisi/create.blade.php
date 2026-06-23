@extends('layouts.admin')

@section('title', 'Tambah Visi & Misi')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Tambah Visi & Misi</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.visimisi.store') }}"
            method="POST">

            @csrf

            <div class="mb-3">
                <label>Visi</label>
                <textarea name="vision"
                    rows="5"
                    class="form-control"
                    required></textarea>
            </div>

            <div class="mb-3">
                <label>Misi</label>
                <textarea name="mission"
                    rows="8"
                    class="form-control"
                    required></textarea>
            </div>

            <button class="btn btn-success">
                Simpan
            </button>

            <a href="{{ route('admin.visimisi.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection