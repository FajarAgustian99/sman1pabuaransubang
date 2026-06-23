@extends('layouts.admin')

@section('title', 'Sambutan Kepala Sekolah')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between mb-4">

        <h2>Sambutan Kepala Sekolah</h2>

        <a href="{{ route('admin.principals.create') }}"
            class="btn btn-success">

            + Tambah

        </a>

    </div>

    <div class="card shadow-sm">

        <div class="card-body table-responsive">

            <table class="table table-bordered align-middle">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($principals as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->name }}</td>

                        <td>{{ $item->position }}</td>

                        <td>

                            @if($item->photo)

                            <img src="{{ asset('storage/' . $item->photo) }}"
                                width="80"
                                class="rounded">

                            @endif

                        </td>

                        <td>

                            <a href="{{ route('admin.principals.edit', $item->id) }}"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('admin.principals.destroy', $item->id) }}"
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