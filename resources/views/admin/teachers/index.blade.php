@extends('layouts.admin')

@section('title','Guru & Staff')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Guru & Staff</h3>

    <a href="{{ route('admin.teachers.create') }}"
        class="btn btn-primary">
        Tambah Data
    </a>
</div>

<table class="table table-bordered align-middle">

    <thead>
        <tr>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Mata Pelajaran</th>
            <th>Urutan</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse($teachers as $teacher)

        <tr>

            <td width="90">
                @if($teacher->photo)
                <img src="{{ asset('storage/'.$teacher->photo) }}"
                    width="60"
                    class="rounded">
                @endif
            </td>

            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->position }}</td>
            <td>{{ $teacher->subject }}</td>
            <td>{{ $teacher->sort_order }}</td>

            <td>
                <a href="{{ route('admin.teachers.edit',$teacher) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('admin.teachers.destroy',$teacher) }}"
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
            <td colspan="6" class="text-center">
                Belum ada data guru.
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection