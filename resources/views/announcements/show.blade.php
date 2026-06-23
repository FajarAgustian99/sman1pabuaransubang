@extends('layouts.main')

@section('title', $announcement->title)

@section('content')

<section class="py-5">
    <div class="container">

        <div class="mb-4">

            <img src="{{ asset('storage/' . $announcement->image) }}"
                class="img-fluid rounded"
                alt="{{ $announcement->title }}">

        </div>

        <div class="mb-3">

            <span class="badge bg-{{ $announcement->button_color }}">
                {{ $announcement->category }}
            </span>

        </div>

        <h1 class="fw-bold mb-3">
            {{ $announcement->title }}
        </h1>

        <p class="text-muted">
            <i class="bi bi-calendar-event"></i>

            {{ \Carbon\Carbon::parse($announcement->announcement_date)->translatedFormat('d F Y') }}
        </p>

        <div class="mt-4">
            {!! nl2br(e($announcement->description)) !!}
        </div>

    </div>
</section>

@endsection