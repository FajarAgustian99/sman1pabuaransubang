@extends('layouts.admin')

@section('title','Edit Fasilitas')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('admin.facilities.update',$facility) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="name"
                    value="{{ $facility->name }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Jenis</label>
                <input type="text" name="type"
                    value="{{ $facility->type }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="description"
                    class="form-control">{{ $facility->description }}</textarea>
            </div>

            <div class="mb-3">
                <label>Jumlah</label>
                <input type="number"
                    name="qty"
                    value="{{ $facility->qty }}"
                    class="form-control">
            </div>

            @if($facility->photo)
            <img src="{{ asset('storage/'.$facility->photo) }}"
                width="120" class="mb-2">
            @endif

            <div class="mb-3">
                <label>Foto</label>
                <input type="file" name="photo" class="form-control">
            </div>

            <div class="mb-3">
                <label>Urutan</label>
                <input type="number"
                    name="sort_order"
                    value="{{ $facility->sort_order }}"
                    class="form-control">
            </div>

            <button class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
</div>

@endsection