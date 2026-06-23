@extends('layouts.admin')

@section('title', 'Pengumuman')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between mb-4">

        <h2>Pengumuman</h2>

        <a href="{{ route('admin.announcements.create') }}"
            class="btn btn-success">

            + Tambah

        </a>

    </div>

    <div class="card">

        <div class="card-body table-responsive">

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @foreach ($announcements as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->title }}</td>

                        <td>{{ $item->category }}</td>

                        <td>{{ $item->announcement_date }}</td>

                        <td>

                            <a href="{{ route('admin.announcements.edit', $item->id) }}"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('admin.announcements.destroy', $item->id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus data?')">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection