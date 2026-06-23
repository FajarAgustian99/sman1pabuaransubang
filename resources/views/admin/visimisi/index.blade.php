@extends('layouts.admin')

@section('title', 'Visi & Misi')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Visi & Misi Sekolah</h3>

    <a href="{{ route('admin.visimisi.create') }}"
        class="btn btn-primary">
        Tambah Data
    </a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th width="50">No</th>
            <th>Visi</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @forelse($visimisi as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ Str::limit($item->vision, 100) }}</td>
            <td>

                <a href="{{ route('admin.visimisi.edit',$item) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('admin.visimisi.destroy',$item) }}"
                    method="POST"
                    class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </form>

            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" class="text-center">
                Belum ada data
            </td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection