@extends('layouts.admin')

@section('title', 'Edit Sejarah')

@section('content')

<form action="{{ route('admin.histories.update', $history->id) }}"
    method="POST"
    enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul</label>
        <input type="text"
            name="title"
            class="form-control"
            value="{{ old('title', $history->title) }}">
    </div>

    <div class="mb-3">
        <label>Gambar Saat Ini</label><br>

        @if($history->image)
        <img src="{{ asset('storage/' . $history->image) }}"
            alt="{{ $history->title }}"
            class="img-thumbnail mb-2"
            width="250">
        @else
        <p class="text-muted">Belum ada gambar</p>
        @endif

        <input type="file"
            name="image"
            class="form-control">
        <small class="text-muted">
            Kosongkan jika tidak ingin mengganti gambar.
        </small>
    </div>

    <div class="mb-3">
        <label>Isi Sejarah</label>
        <textarea name="content"
            rows="8"
            class="form-control">{{ old('content', $history->content) }}</textarea>
    </div>

    <button type="submit" class="btn btn-warning">
        Update
    </button>

    <a href="{{ route('admin.histories.index') }}"
        class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection