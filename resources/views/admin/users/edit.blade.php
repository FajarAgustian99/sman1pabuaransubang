@extends('layouts.admin')

@section('title', 'Edit User')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Edit User</h5>

    <a href="{{ route('admin.users.index') }}" class="btn btn-secondary btn-sm">
        <i class="bi bi-arrow-left"></i> Kembali
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        {{-- ERROR VALIDATION --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- NAME --}}
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text"
                    name="name"
                    value="{{ old('name', $user->name) }}"
                    class="form-control"
                    required>
            </div>

            {{-- EMAIL --}}
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                    name="email"
                    value="{{ old('email', $user->email) }}"
                    class="form-control"
                    required>
            </div>

            {{-- PASSWORD (optional) --}}
            <div class="mb-3">
                <label class="form-label">Password (opsional)</label>
                <input type="password"
                    name="password"
                    class="form-control"
                    placeholder="Kosongkan jika tidak diubah">
            </div>

            {{-- ROLE --}}
            <div class="mb-3">
                <label class="form-label">Role</label>
                <select name="role" class="form-select" required>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="guru" {{ $user->role == 'guru' ? 'selected' : '' }}>Guru</option>
                    <option value="siswa" {{ $user->role == 'siswa' ? 'selected' : '' }}>Siswa</option>
                </select>
            </div>

            {{-- BUTTON --}}
            <button class="btn btn-primary">
                <i class="bi bi-save"></i> Update User
            </button>

        </form>

    </div>
</div>

@endsection