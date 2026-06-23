@extends('layouts.admin')

@section('title', 'Edit Prestasi')

@section('content')

<div class="container">

    <div class="card shadow-sm border-0">

        <div class="card-header">
            <h4>Edit Prestasi</h4>
        </div>

        <div class="card-body">

            <form
                action="{{ route('admin.extracurricular-achievements.update',$extracurricularAchievement) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title',$extracurricularAchievement->title) }}"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea
                        name="description"
                        rows="4"
                        class="form-control">{{ old('description',$extracurricularAchievement->description) }}</textarea>

                </div>

                @if($extracurricularAchievement->image)

                <div class="mb-3">

                    <img
                        src="{{ asset('storage/'.$extracurricularAchievement->image) }}"
                        width="180"
                        class="img-thumbnail">

                </div>

                @endif

                <div class="mb-3">

                    <label class="form-label">
                        Ganti Gambar
                    </label>

                    <input
                        type="file"
                        name="image"
                        class="form-control">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Urutan
                    </label>

                    <input
                        type="number"
                        name="sort_order"
                        value="{{ $extracurricularAchievement->sort_order }}"
                        class="form-control">

                </div>

                <div class="form-check mb-4">

                    <input
                        type="checkbox"
                        name="is_active"
                        class="form-check-input"
                        {{ $extracurricularAchievement->is_active ? 'checked' : '' }}>

                    <label class="form-check-label">
                        Aktif
                    </label>

                </div>

                <button class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('admin.extracurricular-achievements.index') }}"
                    class="btn btn-secondary">

                    Kembali

                </a>

            </form>

        </div>

    </div>

</div>

@endsection