@extends('layouts.admin') @section('title', 'Edit Slider') @section('content') <div class="container-fluid">
    <div class="card border-0 shadow-sm">
        <div class="card-header">
            <h5 class="mb-0"> Edit Hero Slider </h5>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sliders.update', $slider->id) }}" method="POST" enctype="multipart/form-data"> @csrf @method('PUT') <div class="mb-3"> <label class="form-label"> Judul </label> <input type="text" name="title" class="form-control" value="{{ $slider->title }}" required> </div>
                <div class="mb-3"> <label class="form-label"> Subtitle </label> <textarea name="subtitle" rows="4" class="form-control">{{ $slider->subtitle }}</textarea> </div>
                <div class="mb-3"> <label class="form-label"> Gambar Saat Ini </label>
                    <div class="mb-2"> <img src="{{ asset('storage/' . $slider->image) }}" width="200" class="rounded"> </div>
                </div>
                <div class="mb-3"> <label class="form-label"> Ganti Gambar </label> <input type="file" name="image" class="form-control"> </div> <button class="btn btn-primary"> Update Slider </button> <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary"> Kembali </a>
            </form>
        </div>
    </div>
</div> @endsection