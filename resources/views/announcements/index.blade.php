@extends('layouts.main')

@section('content')
<div class="container py-4">

    <h2 class="mb-4">Pengumuman Sekolah</h2>

    @forelse ($announcements as $announcement)
    <div class="card mb-3">
        <div class="card-body">
            <h5>{{ $announcement->title }}</h5>

            <p>
                {{ Str::limit($announcement->description, 120) }}
            </p>

            <a href="{{ route('announcements.show', $announcement->slug) }}">
                Baca Selengkapnya
            </a>
        </div>
    </div>
    @empty
    <p>Tidak ada pengumuman.</p>
    @endforelse

    <div class="mt-3">
        {{ $announcements->links() }}
    </div>

</div>
@endsection