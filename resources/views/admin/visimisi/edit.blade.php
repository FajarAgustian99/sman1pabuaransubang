@extends('layouts.admin')

@section('title', 'Edit Visi & Misi')

@section('content')

<div class="card">
    <div class="card-header">
        <h4>Edit Visi & Misi</h4>
    </div>

    <div class="card-body">

        <form action="{{ route('admin.visimisi.update',$visimisi) }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Visi</label>
                <textarea name="vision"
                    rows="5"
                    class="form-control">{{ $visimisi->vision }}</textarea>
            </div>

            <div class="mb-3">
                <label>Misi</label>
                <textarea name="mission"
                    rows="8"
                    class="form-control">{{ $visimisi->mission }}</textarea>
            </div>

            <button class="btn btn-primary">
                Update
            </button>

            <a href="{{ route('admin.visimisi.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection