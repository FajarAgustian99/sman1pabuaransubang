@extends('layouts.admin')

@section('title', 'Berita Sekolah')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Berita Sekolah</h3>

    <a href="{{ route('admin.news.create') }}"
        class="btn btn-primary">
        Tambah Berita
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
        @foreach($news as $item)
        <tr>
            <td>{{ $item->title }}</td>
            <td>{{ $item->created_at->format('d M Y') }}</td>
            <td>
                <a href="{{ route('admin.news.edit', $item) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('admin.news.destroy', $item) }}"
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

{{ $news->links() }}

@endsection