@extends('layouts.admin')

@section('title','Struktur Organisasi')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h3>Struktur Organisasi</h3>

    <a href="{{ route('admin.organizations.create') }}"
        class="btn btn-primary">
        Tambah Data
    </a>
</div>

<table class="table table-bordered">

    <thead>
        <tr>
            <th>Foto</th>
            <th>Jabatan</th>
            <th>Nama</th>
            <th>Urutan</th>
            <th width="180">Aksi</th>
        </tr>
    </thead>

    <tbody>

        @forelse($organizations as $item)

        <tr>

            <td width="90">

                @if($item->photo)
                <img src="{{ asset('storage/'.$item->photo) }}"
                    width="60">
                @endif

            </td>

            <td>{{ $item->position }}</td>

            <td>{{ $item->name }}</td>

            <td>{{ $item->sort_order }}</td>

            <td>

                <a href="{{ route('admin.organizations.edit',$item) }}"
                    class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form
                    action="{{ route('admin.organizations.destroy',$item) }}"
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
            <td colspan="5" class="text-center">
                Belum ada data
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection