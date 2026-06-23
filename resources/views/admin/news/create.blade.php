@extends('layouts.admin')

@section('title', 'Tambah Berita')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm">
        <div class="card-header">
            <h4 class="mb-0">Tambah Berita Sekolah</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.news.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                {{-- Judul --}}
                <div class="mb-3">
                    <label class="form-label">
                        Judul Berita
                    </label>

                    <input type="text"
                        name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}"
                        required>

                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Gambar --}}
                <div class="mb-3">
                    <label class="form-label">
                        Gambar Berita
                    </label>

                    <input type="file"
                        name="image"
                        class="form-control @error('image') is-invalid @enderror">

                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Isi --}}
                <div class="mb-3">
                    <label class="form-label">
                        Isi Berita
                    </label>

                    <textarea
                        name="content"
                        rows="10"
                        class="form-control @error('content') is-invalid @enderror"
                        required>{{ old('content') }}</textarea>

                    @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Status --}}
                <div class="mb-3">
                    <label class="form-label">
                        Status Publikasi
                    </label>

                    <select name="is_published" class="form-select">
                        <option value="1">Publish</option>
                        <option value="0">Draft</option>
                    </select>
                </div>

                <div class="d-flex gap-2">

                    <a href="{{ route('admin.news.index') }}"
                        class="btn btn-secondary">
                        Kembali
                    </a>

                    <button type="submit"
                        class="btn btn-primary">
                        Simpan Berita
                    </button>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection