@extends('layouts.admin')

@section('title', 'Detail Pesan')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header">

            <h5 class="mb-0">
                Detail Pesan
            </h5>

        </div>

        <div class="card-body">

            <p>
                <strong>Nama :</strong>
                {{ $contactMessage->name }}
            </p>

            <p>
                <strong>Email :</strong>
                {{ $contactMessage->email }}
            </p>

            <p>
                <strong>Subjek :</strong>
                {{ $contactMessage->subject }}
            </p>

            <hr>

            <p>
                {{ $contactMessage->message }}
            </p>

            <a href="{{ route('admin.contact-messages.index') }}"
                class="btn btn-secondary">

                Kembali

            </a>

        </div>

    </div>

</div>

@endsection