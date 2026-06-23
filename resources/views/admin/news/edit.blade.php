@extends('layouts.admin')

@section('title', 'Edit Berita')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Berita</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.news.update', $news) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Judul</label>
                <input type="text"
                    name="title"
                    class="form-control"
                    value="{{ old('title', $news->title) }}">
            </div>

            <div class="mb-3">
                <label>Gambar</label>

                @if($news->image)
                <div class="mb-2">
                    <img src="{{ asset('storage/'.$news->image) }}"
                        width="200">
                </div>
                @endif

                <input type="file"
                    name="image"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Isi Berita</label>

                <textarea
                    name="content"
                    rows="10"
                    class="form-control">{{ old('content', $news->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label>Status</label>

                <select name="is_published"
                    class="form-select">

                    <option value="1"
                        {{ $news->is_published ? 'selected' : '' }}>
                        Publish
                    </option>

                    <option value="0"
                        {{ !$news->is_published ? 'selected' : '' }}>
                        Draft
                    </option>

                </select>
            </div>

            <button class="btn btn-success">
                Update
            </button>

            <a href="{{ route('admin.news.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection