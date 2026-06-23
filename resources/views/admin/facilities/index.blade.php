@extends('layouts.admin')

@section('title','Fasilitas Sekolah')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Fasilitas Sekolah</h3>

    <a href="{{ route('admin.facilities.create') }}"
        class="btn btn-primary">
        Tambah Data
    </a>
</div>

<div class="row">

    @forelse($facilities as $facility)

    <div class="col-lg-4 col-md-6 mb-4">

        <div class="card h-100 shadow-sm">

            @if($facility->photo)
            <img src="{{ asset('storage/'.$facility->photo) }}"
                class="card-img-top"
                style="height:200px; object-fit:cover;">
            @endif

            <div class="card-body">

                <h5 class="fw-bold">{{ $facility->name }}</h5>

                <p class="text-muted mb-1">
                    {{ $facility->type }}
                </p>

                <p class="small">
                    {{ Str::limit($facility->description, 100) }}
                </p>

                <p class="small text-secondary">
                    Jumlah: {{ $facility->qty }}
                </p>

            </div>

            <div class="card-footer d-flex justify-content-between">

                <a href="{{ route('admin.facilities.edit',$facility) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('admin.facilities.destroy',$facility) }}"
                    method="POST">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </div>

        </div>

    </div>

    @empty

    <div class="col-12 text-center">
        <div class="alert alert-warning">
            Belum ada data fasilitas.
        </div>
    </div>

    @endforelse

</div>

@endsection