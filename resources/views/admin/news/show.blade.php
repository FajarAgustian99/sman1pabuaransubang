@extends('layouts.admin')

@section('title', $news->title)

@section('content')

<div class="card">
    <div class="card-header">
        <h4>{{ $news->title }}</h4>
    </div>

    <div class="card-body">

        @if($news->image)
        <img src="{{ asset('storage/'.$news->image) }}"
            class="img-fluid rounded mb-3">
        @endif

        <div>
            {!! nl2br(e($news->content)) !!}
        </div>

    </div>

    <div class="card-footer">
        <a href="{{ route('admin.news.index') }}"
            class="btn btn-secondary">
            Kembali
        </a>
    </div>
</div>

@endsection