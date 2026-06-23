@extends('layouts.admin')

@section('title', 'Sejarah Sekolah')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Sejarah Sekolah</h3>

    <a href="{{ route('admin.histories.create') }}"
        class="btn btn-primary">
        Tambah Data
    </a>
</div>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Tanggal</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach($histories as $history)
        <tr>
            <td>{{ $history->title }}</td>
            <td>{{ $history->created_at->format('d M Y') }}</td>
            <td>

                <a href="{{ route('admin.histories.edit',$history) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('admin.histories.destroy',$history) }}"
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
        @endforeach
    </tbody>
</table>

{{ $histories->links() }}

@endsection