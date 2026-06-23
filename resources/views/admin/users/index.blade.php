@extends('layouts.admin')

@section('title', 'Data User')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h5 class="fw-bold mb-0">Daftar User</h5>

    <a href="{{ route('admin.users.create') }}" class="btn btn-primary btn-sm">
        <i class="bi bi-plus-circle"></i> Tambah User
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">
            <table id="userTable" class="table table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <span class="badge bg-{{ $user->role == 'admin' ? 'danger' : ($user->role == 'guru' ? 'primary' : 'success') }}">
                                {{ strtoupper($user->role) }}
                            </span>
                        </td>
                        <td>{{ $user->created_at->format('d M Y') }}</td>

                        <td>
                            <a href="{{ route('admin.users.edit', $user->id) }}"
                                class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('admin.users.destroy', $user->id) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Yakin hapus user ini?')">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>

@endsection