@extends('layouts.admin') @section('title', 'Tambah Slider') @section('content') <div class="container-fluid">
    <div class="card border-0 shadow-sm">
        <div class="card-header">
            <h5 class="mb-0"> Tambah Hero Slider </h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data"> @csrf <div class="mb-3"> <label class="form-label"> Judul </label> <input type="text" name="title" class="form-control" required> </div>
                <div class="mb-3"> <label class="form-label"> Subtitle </label> <textarea name="subtitle" rows="4" class="form-control"></textarea> </div>
                <div class="mb-3"> <label class="form-label"> Gambar Slider </label> <input type="file" name="image" class="form-control" required> </div> <button class="btn btn-success"> Simpan Slider </button> <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary"> Kembali </a>
            </form>
        </div>
    </div>
</div> @endsection