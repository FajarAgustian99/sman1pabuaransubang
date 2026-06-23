@extends('layouts.admin')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h4>Data Program Akademik</h4>
    <a href="{{ route('admin.academic-programs.create') }}" class="btn btn-primary">
        + Tambah Program
    </a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($programs as $i => $item)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ Str::limit($item->description, 80) }}</td>
            <td>
                <a href="{{ route('admin.academic-programs.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('admin.academic-programs.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection