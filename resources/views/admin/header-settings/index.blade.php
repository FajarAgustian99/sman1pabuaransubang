@extends('layouts.admin')

@section('title', 'Pengaturan Header')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="mb-1">Pengaturan Header</h4>
            <p class="text-muted mb-0">
                Kelola logo, nama sekolah, dan tombol header website.
            </p>
        </div>
    </div>

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">

        {{ session('success') }}

        <button type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">

            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach

        </ul>
    </div>
    @endif

    <div class="card shadow-sm border-0">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">
                Form Pengaturan Header
            </h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.header-settings.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                {{-- Nama Sekolah --}}
                <div class="mb-3">

                    <label class="form-label">
                        Nama Sekolah
                    </label>

                    <input type="text"
                        name="school_name"
                        class="form-control"
                        value="{{ old('school_name', $header->school_name ?? 'SMAN 1 PABUARAN') }}"
                        required>

                </div>

                {{-- Logo --}}
                <div class="mb-3">

                    <label class="form-label">
                        Logo Sekolah
                    </label>

                    <input type="file"
                        name="logo"
                        class="form-control">

                    @if(!empty($header?->logo))
                    <div class="mt-3">

                        <img src="{{ asset('storage/'.$header->logo) }}"
                            width="120"
                            class="img-thumbnail">

                    </div>
                    @endif

                </div>

                {{-- Tombol E-Learning --}}
                <div class="mb-3">

                    <label class="form-label">
                        Teks Tombol E-Learning
                    </label>

                    <input type="text"
                        name="elearning_text"
                        class="form-control"
                        value="{{ old('elearning_text', $header->elearning_text ?? 'E-Learning') }}"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Link E-Learning
                    </label>

                    <input type="url"
                        name="elearning_url"
                        class="form-control"
                        value="{{ old('elearning_url', $header->elearning_url ?? '') }}"
                        placeholder="https://e-learning.sch.id">

                </div>

                {{-- Tombol PPDB --}}
                <div class="mb-3">

                    <label class="form-label">
                        Teks Tombol PPDB / SPMB
                    </label>

                    <input type="text"
                        name="ppdb_text"
                        class="form-control"
                        value="{{ old('ppdb_text', $header->ppdb_text ?? 'SPMB Online') }}"
                        required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Link PPDB / SPMB
                    </label>

                    <input type="url"
                        name="ppdb_url"
                        class="form-control"
                        value="{{ old('ppdb_url', $header->ppdb_url ?? '') }}"
                        placeholder="https://spmb.jabarprov.go.id">

                </div>

                <div class="text-end">

                    <button type="submit"
                        class="btn btn-primary">

                        <i class="bi bi-save me-1"></i>
                        Simpan Pengaturan

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection