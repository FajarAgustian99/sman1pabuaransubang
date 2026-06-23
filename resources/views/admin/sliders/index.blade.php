@extends('layouts.admin') @section('title', 'Hero Slider') @section('content') <div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold"> Hero Slider </h2>
            <p class="text-muted"> Kelola slider halaman homepage. </p>
        </div> <a href="{{ route('admin.sliders.create') }}" class="btn btn-success"> <i class="bi bi-plus-circle"></i> Tambah Slider </a>
    </div> @if(session('success')) <div class="alert alert-success"> {{ session('success') }} </div> @endif <div class="card border-0 shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-bordered align-middle">
                <thead>
                    <tr>
                        <th width="80">No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Subtitle</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody> @forelse ($sliders as $slider) <tr>
                        <td> {{ $loop->iteration }} </td>
                        <td> <img src="{{ asset('storage/' . $slider->image) }}" width="150" class="rounded"> </td>
                        <td> {{ $slider->title }} </td>
                        <td> {{ $slider->subtitle }} </td>
                        <td> <a href="{{ route('admin.sliders.edit', $slider->id) }}" class="btn btn-warning btn-sm"> Edit </a>
                            <form action="{{ route('admin.sliders.destroy', $slider->id) }}" method="POST" class="d-inline"> @csrf @method('DELETE') <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus slider?')"> Hapus </button> </form>
                        </td>
                    </tr> @empty <tr>
                        <td colspan="5" class="text-center"> Data slider belum tersedia. </td>
                    </tr> @endforelse </tbody>
            </table>
        </div>
    </div>
</div> @endsection