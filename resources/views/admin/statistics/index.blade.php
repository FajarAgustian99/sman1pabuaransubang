@extends('layouts.admin')

@section('title', 'Statistik Sekolah')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between mb-4">

        <h2>Statistik Sekolah</h2>

        <a href="{{ route('admin.statistics.create') }}"
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
                        <th>Judul</th>
                        <th>Total</th>
                        <th>Warna</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($statistics as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $item->title }}</td>

                        <td>{{ $item->total }}</td>

                        <td>
                            <span class="badge bg-{{ $item->color }}">
                                {{ $item->color }}
                            </span>
                        </td>

                        <td>

                            <a href="{{ route('admin.statistics.edit', $item->id) }}"
                                class="btn btn-warning btn-sm">

                                Edit

                            </a>

                            <form action="{{ route('admin.statistics.destroy', $item->id) }}"
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