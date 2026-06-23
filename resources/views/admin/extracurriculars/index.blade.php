@extends('layouts.admin')

@section('title', 'Data Ekstrakurikuler')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold mb-1">Data Ekstrakurikuler</h3>
            <p class="text-muted mb-0">
                Kelola seluruh kegiatan ekstrakurikuler sekolah.
            </p>
        </div>

        <a href="{{ route('admin.extracurriculars.create') }}"
            class="btn btn-primary">
            <i class="bi bi-plus-circle"></i>
            Tambah Ekstrakurikuler
        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>
    </div>
    @endif

    <div class="card border-0 shadow-sm">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table table-hover align-middle mb-0">

                    <thead class="table-light">

                        <tr>
                            <th width="70">No</th>
                            <th width="120">Foto</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th width="120">Urutan</th>
                            <th width="100">Status</th>
                            <th width="220">Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        @forelse($extracurriculars as $item)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>

                                @if($item->image)

                                <img
                                    src="{{ asset('storage/'.$item->image) }}"
                                    class="rounded"
                                    width="80"
                                    height="80"
                                    style="object-fit:cover;">

                                @else

                                <span class="badge bg-secondary">
                                    Tidak Ada
                                </span>

                                @endif

                            </td>

                            <td>

                                <div class="fw-semibold">
                                    {{ $item->name }}
                                </div>

                            </td>

                            <td>

                                {{ Str::limit($item->description, 100) }}

                            </td>

                            <td>

                                {{ $item->sort_order }}

                            </td>

                            <td>

                                @if($item->is_active)

                                <span class="badge bg-success">
                                    Aktif
                                </span>

                                @else

                                <span class="badge bg-danger">
                                    Nonaktif
                                </span>

                                @endif

                            </td>

                            <td>

                                <div class="d-flex gap-2">

                                    <a href="{{ route('admin.extracurriculars.show', $item) }}"
                                        class="btn btn-info btn-sm">
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a href="{{ route('admin.extracurriculars.edit', $item) }}"
                                        class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <form
                                        action="{{ route('admin.extracurriculars.destroy', $item) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="btn btn-danger btn-sm">

                                            <i class="bi bi-trash"></i>

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="7"
                                class="text-center py-5 text-muted">

                                Belum ada data ekstrakurikuler.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection