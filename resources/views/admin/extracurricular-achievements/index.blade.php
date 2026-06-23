@extends('layouts.admin')

@section('title', 'Prestasi Ekstrakurikuler')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="mb-0">Prestasi Ekstrakurikuler</h3>

        <a href="{{ route('admin.extracurricular-achievements.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Prestasi

        </a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card shadow-sm border-0">

        <div class="card-body p-0">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-light">

                    <tr>
                        <th width="60">No</th>
                        <th width="120">Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th width="80">Urutan</th>
                        <th width="100">Status</th>
                        <th width="200">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($achievements as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            @if($item->image)

                            <img src="{{ asset('storage/'.$item->image) }}"
                                class="img-thumbnail"
                                width="90">

                            @endif

                        </td>

                        <td>{{ $item->title }}</td>

                        <td>
                            {{ Str::limit($item->description, 80) }}
                        </td>

                        <td>{{ $item->sort_order }}</td>

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

                            <a href="{{ route('admin.extracurricular-achievements.show',$item) }}"
                                class="btn btn-info btn-sm">

                                <i class="bi bi-eye"></i>

                            </a>

                            <a href="{{ route('admin.extracurricular-achievements.edit',$item) }}"
                                class="btn btn-warning btn-sm">

                                <i class="bi bi-pencil"></i>

                            </a>

                            <form
                                action="{{ route('admin.extracurricular-achievements.destroy',$item) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Yakin hapus data?')"
                                    class="btn btn-danger btn-sm">

                                    <i class="bi bi-trash"></i>

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="7" class="text-center py-4">
                            Belum ada data.
                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection