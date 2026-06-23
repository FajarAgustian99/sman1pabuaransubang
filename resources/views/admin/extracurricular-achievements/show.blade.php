@extends('layouts.admin')

@section('title', 'Detail Prestasi')

@section('content')

<div class="container">

    <div class="card shadow-sm border-0">

        <div class="card-header">
            <h4>{{ $extracurricularAchievement->title }}</h4>
        </div>

        <div class="card-body">

            @if($extracurricularAchievement->image)

            <img
                src="{{ asset('storage/'.$extracurricularAchievement->image) }}"
                class="img-fluid rounded mb-4"
                style="max-height:400px">

            @endif

            <table class="table">

                <tr>
                    <th width="180">Judul</th>
                    <td>{{ $extracurricularAchievement->title }}</td>
                </tr>

                <tr>
                    <th>Deskripsi</th>
                    <td>{{ $extracurricularAchievement->description }}</td>
                </tr>

                <tr>
                    <th>Urutan</th>
                    <td>{{ $extracurricularAchievement->sort_order }}</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>

                        @if($extracurricularAchievement->is_active)

                        <span class="badge bg-success">
                            Aktif
                        </span>

                        @else

                        <span class="badge bg-danger">
                            Nonaktif
                        </span>

                        @endif

                    </td>
                </tr>

            </table>

            <a href="{{ route('admin.extracurricular-achievements.index') }}"
                class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </div>

</div>

@endsection