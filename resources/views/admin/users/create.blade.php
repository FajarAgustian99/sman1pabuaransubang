@extends('layouts.admin')

@section('title', 'Tambah User')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Form Tambah User</h5>

    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-sm">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        {{-- VALIDATION ERROR --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf

            {{-- NAMA --}}
            <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text"
                    name="name"
                    class="form-control @error('name') is-invalid @enderror"
                    value="{{ old('name') }}"
                    placeholder="Masukkan nama lengkap">

                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- EMAIL --}}
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email">

                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- PASSWORD --}}
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password"
                    name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    placeholder="Minimal 6 karakter">

                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- ROLE --}}
            <div class="mb-3">
                <label class="form-label">Role User</label>
                <select name="role"
                    class="form-select @error('role') is-invalid @enderror">

                    <option value="">-- Pilih Role --</option>
                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                    <option value="siswa" {{ old('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                </select>

                @error('role')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- BUTTON --}}
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-save"></i> Simpan User
                </button>

                <button type="reset" class="btn btn-outline-secondary">
                    Reset
                </button>
            </div>

        </form>

    </div>
</div>

@endsection