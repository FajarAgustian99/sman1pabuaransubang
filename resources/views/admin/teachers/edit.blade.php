@extends('layouts.admin')

@section('title','Edit Guru')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.teachers.update',$teacher) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text"
                    name="name"
                    value="{{ $teacher->name }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Jabatan</label>
                <input type="text"
                    name="position"
                    value="{{ $teacher->position }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text"
                    name="subject"
                    value="{{ $teacher->subject }}"
                    class="form-control">
            </div>

            <div class="mb-3">

                @if($teacher->photo)
                <img src="{{ asset('storage/'.$teacher->photo) }}"
                    width="120"
                    class="mb-2">
                @endif

                <input type="file"
                    name="photo"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Urutan</label>
                <input type="number"
                    name="sort_order"
                    value="{{ $teacher->sort_order }}"
                    class="form-control">
            </div>

            <button class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
</div>

@endsection