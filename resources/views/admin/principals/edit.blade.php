@extends('layouts.admin')

@section('title', 'Edit Sambutan')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-body">

            <form action="{{ route('admin.principals.update', $principal->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <input type="text"
                    name="name"
                    class="form-control mb-2"
                    value="{{ $principal->name }}">

                <input type="text"
                    name="position"
                    class="form-control mb-2"
                    value="{{ $principal->position }}">

                <textarea name="message"
                    class="form-control mb-2"
                    rows="5">{{ $principal->message }}</textarea>

                @if($principal->photo)

                <div class="mb-2">

                    <img src="{{ asset('storage/' . $principal->photo) }}"
                        width="120"
                        class="rounded">

                </div>

                @endif

                <input type="file"
                    name="photo"
                    class="form-control mb-3">

                <button class="btn btn-primary">
                    Update
                </button>

            </form>

        </div>

    </div>

</div>

@endsection