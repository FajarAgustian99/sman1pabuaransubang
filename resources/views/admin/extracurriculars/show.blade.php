@extends('layouts.admin')

@section('title', 'Detail Ekstrakurikuler')

@section('content')
<div class="container">

    <div class="card shadow-sm">

        <div class="card-header">
            <h4>{{ $extracurricular->name }}</h4>
        </div>

        <div class="card-body">

            @if($extracurricular->image)
            <img src="{{ asset('storage/'.$extracurricular->image) }}"
                class="img-fluid rounded mb-4"
                style="max-height:300px">
            @endif

            <table class="table">

                <tr>
                    <th width="200">Nama</th>
                    <td>{{ $extracurricular->name }}</td>
                </tr>

                <tr>
                    <th>Pembina</th>
                    <td>{{ $extracurricular->coach }}</td>
                </tr>

                <tr>
                    <th>Jadwal</th>
                    <td>{{ $extracurricular->schedule }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        @if($extracurricular->is_active)
                        <span class="badge bg-success">
                            Aktif
                        </span>
                        @else
                        <span class="badge bg-danger">
                            Tidak Aktif
                        </span>
                        @endif
                    </td>
                </tr>

                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $extracurricular->description }}</td>
                </tr>

            </table>

            <a href="{{ route('admin.extracurriculars.index') }}"
                class="btn btn-secondary">
                Kembali
            </a>

            <a href="{{ route('admin.extracurriculars.edit', $extracurricular->id) }}"
                class="btn btn-warning">
                Edit
            </a>

        </div>

    </div>

</div>
@endsection