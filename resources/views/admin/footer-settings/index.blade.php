@extends('layouts.admin')

@section('title', 'Footer Website')

@section('content')

<div class="container">

    <h3 class="mb-4">
        Pengaturan Footer Website
    </h3>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('admin.footer-settings.store') }}"
        method="POST">

        @csrf

        <div class="card">

            <div class="card-body">

                <div class="mb-3">
                    <label>Nama Sekolah</label>

                    <input type="text"
                        name="school_name"
                        class="form-control"
                        value="{{ old('school_name', $footer->school_name ?? '') }}">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>

                    <textarea
                        name="description"
                        rows="4"
                        class="form-control">{{ old('description', $footer->description ?? '') }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Alamat</label>

                    <textarea
                        name="address"
                        rows="3"
                        class="form-control">{{ old('address', $footer->address ?? '') }}</textarea>
                </div>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <label>Telepon</label>

                        <input type="text"
                            name="phone"
                            class="form-control"
                            value="{{ old('phone', $footer->phone ?? '') }}">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label>Email</label>

                        <input type="email"
                            name="email"
                            class="form-control"
                            value="{{ old('email', $footer->email ?? '') }}">
                    </div>

                </div>

                <div class="mb-3">
                    <label>Jam Operasional</label>

                    <input type="text"
                        name="working_hours"
                        class="form-control"
                        value="{{ old('working_hours', $footer->working_hours ?? '') }}">
                </div>

                <hr>

                <div class="mb-3">
                    <label>Facebook</label>

                    <input type="url"
                        name="facebook"
                        class="form-control"
                        value="{{ old('facebook', $footer->facebook ?? '') }}">
                </div>

                <div class="mb-3">
                    <label>Instagram</label>

                    <input type="url"
                        name="instagram"
                        class="form-control"
                        value="{{ old('instagram', $footer->instagram ?? '') }}">
                </div>

                <div class="mb-3">
                    <label>Youtube</label>

                    <input type="url"
                        name="youtube"
                        class="form-control"
                        value="{{ old('youtube', $footer->youtube ?? '') }}">
                </div>

                <hr>

                <div class="row">

                    <div class="col-md-4 mb-3">
                        <label>Tahun Copyright</label>

                        <input type="number"
                            name="copyright_year"
                            class="form-control"
                            value="{{ old('copyright_year', $footer->copyright_year ?? date('Y')) }}">
                    </div>

                    <div class="col-md-8 mb-3">
                        <label>Nama Copyright</label>

                        <input type="text"
                            name="copyright_name"
                            class="form-control"
                            value="{{ old('copyright_name', $footer->copyright_name ?? '') }}">
                    </div>

                </div>

            </div>

            <div class="card-footer text-end">

                <button
                    type="submit"
                    class="btn btn-primary">

                    Simpan Perubahan

                </button>

            </div>

        </div>

    </form>

</div>

@endsection