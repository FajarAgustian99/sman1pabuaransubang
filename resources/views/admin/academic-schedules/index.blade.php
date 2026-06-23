@extends('layouts.admin')

@section('title', 'Jadwal Akademik')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Jadwal Akademik</h3>

    <a href="{{ route('admin.academic-schedules.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle me-1"></i> Tambah Jadwal
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th width="60">No</th>
                        <th>Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($schedules as $key => $schedule)
                    <tr>
                        <td>{{ $key + 1 }}</td>

                        <td class="fw-semibold">
                            {{ $schedule->activity }}
                        </td>

                        <td>
                            <span class="badge bg-info text-dark">
                                {{ \Carbon\Carbon::parse($schedule->activity_date)->format('d M Y') }}
                            </span>
                        </td>

                        <td>
                            {{ $schedule->description ?? '-' }}
                        </td>

                        <td>
                            <a href="{{ route('admin.academic-schedules.edit', $schedule->id) }}"
                                class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('admin.academic-schedules.destroy', $schedule->id) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Yakin hapus data ini?')">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            Belum ada data jadwal
                        </td>
                    </tr>
                    @endforelse
                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection