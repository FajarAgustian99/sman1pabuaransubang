@extends('layouts.admin')

@section('title', 'Pesan Masuk')

@section('content')

<div class="container-fluid">

    <h3 class="mb-4">
        Pesan Masuk
    </h3>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card border-0 shadow-sm">

        <div class="card-body">

            <table class="table table-bordered">

                <thead>

                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Status</th>
                        <th width="150">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($messages as $message)

                    <tr>

                        <td>{{ $message->name }}</td>

                        <td>{{ $message->email }}</td>

                        <td>{{ $message->subject }}</td>

                        <td>

                            @if($message->is_read)

                            <span class="badge bg-success">
                                Dibaca
                            </span>

                            @else

                            <span class="badge bg-danger">
                                Belum Dibaca
                            </span>

                            @endif

                        </td>

                        <td>

                            <a href="{{ route('admin.contact-messages.show',$message->id) }}"
                                class="btn btn-info btn-sm">

                                Detail

                            </a>

                            <form
                                action="{{ route('admin.contact-messages.destroy',$message->id) }}"
                                method="POST"
                                class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('Hapus pesan ini?')">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5" class="text-center">
                            Belum ada pesan.
                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

            {{ $messages->links() }}

        </div>

    </div>

</div>

@endsection