@extends('layouts.admin')

@section('title', 'Informasi Kontak')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="mb-1">Informasi Kontak</h3>
            <p class="text-muted mb-0">
                Kelola informasi kontak sekolah yang tampil di website.
            </p>
        </div>

        @if(!$contact)
        <a href="{{ route('admin.contacts.create') }}"
            class="btn btn-primary">

            <i class="bi bi-plus-circle"></i>
            Tambah Kontak

        </a>
        @endif

    </div>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if($contact)

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <table class="table">

                <tr>
                    <th width="200">Alamat</th>
                    <td>{{ $contact->address }}</td>
                </tr>

                <tr>
                    <th>Telepon</th>
                    <td>{{ $contact->phone }}</td>
                </tr>

                <tr>
                    <th>Email</th>
                    <td>{{ $contact->email }}</td>
                </tr>

                <tr>
                    <th>Jam Operasional</th>
                    <td>{{ $contact->operational_hours }}</td>
                </tr>

            </table>

            <div class="mt-3">

                <a href="{{ route('admin.contacts.edit',$contact->id) }}"
                    class="btn btn-warning">

                    <i class="bi bi-pencil"></i>
                    Edit

                </a>

            </div>

        </div>

    </div>

    @else

    <div class="alert alert-info">
        Informasi kontak belum tersedia.
    </div>

    @endif

</div>

@endsection