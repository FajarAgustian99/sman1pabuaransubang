@extends('layouts.admin')

@section('title', 'Tambah Statistik')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-body">

            <form action="{{ route('admin.statistics.store') }}"
                method="POST">

                @csrf

                <input type="text"
                    name="title"
                    class="form-control mb-2"
                    placeholder="Judul (Siswa, Guru, dll)">

                <input type="number"
                    name="total"
                    class="form-control mb-2"
                    placeholder="Jumlah">

                <input type="text"
                    name="icon"
                    class="form-control mb-2"
                    placeholder="Icon (bi bi-...)">

                <select name="color"
                    class="form-control mb-3">

                    <option value="primary">Primary</option>
                    <option value="success">Success</option>
                    <option value="warning">Warning</option>
                    <option value="danger">Danger</option>

                </select>

                <button class="btn btn-success">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

@endsection