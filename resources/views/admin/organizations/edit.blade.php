@extends('layouts.admin')

@section('title','Edit Struktur Organisasi')

@section('content')

<div class="card">
    <div class="card-body">

        <form
            action="{{ route('admin.organizations.update',$organization) }}"
            method="POST"
            enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Jabatan</label>
                <input type="text"
                    name="position"
                    value="{{ $organization->position }}"
                    class="form-control">
            </div>

            <div class="mb-3">
                <label>Nama</label>
                <input type="text"
                    name="name"
                    value="{{ $organization->name }}"
                    class="form-control">
            </div>

            <div class="mb-3">

                @if($organization->photo)
                <img
                    src="{{ asset('storage/'.$organization->photo) }}"
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
                    value="{{ $organization->sort_order }}"
                    class="form-control">
            </div>

            <button class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
</div>

@endsection