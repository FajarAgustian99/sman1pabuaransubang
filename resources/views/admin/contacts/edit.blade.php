@extends('layouts.admin')

@section('title', 'Edit Kontak')

@section('content')

<div class="container-fluid">

    <div class="card shadow-sm border-0">

        <div class="card-header">
            <h5 class="mb-0">Edit Informasi Kontak</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('admin.contacts.update',$contact->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">
                        Alamat
                    </label>

                    <textarea
                        name="address"
                        class="form-control"
                        rows="4"
                        required>{{ old('address',$contact->address) }}</textarea>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Telepon
                    </label>

                    <input type="text"
                        name="phone"
                        class="form-control"
                        value="{{ old('phone',$contact->phone) }}">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Email
                    </label>

                    <input type="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email',$contact->email) }}">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Jam Operasional
                    </label>

                    <input type="text"
                        name="operational_hours"
                        class="form-control"
                        value="{{ old('operational_hours',$contact->operational_hours) }}">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Google Maps Embed
                    </label>

                    <textarea
                        name="google_maps_embed"
                        rows="5"
                        class="form-control">{{ old('google_maps_embed',$contact->google_maps_embed) }}</textarea>

                </div>

                <button class="btn btn-primary">
                    Update
                </button>

                <a href="{{ route('admin.contacts.index') }}"
                    class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>

    </div>

</div>

@endsection