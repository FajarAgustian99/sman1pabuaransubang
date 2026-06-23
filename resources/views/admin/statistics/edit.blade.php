@extends('layouts.admin')

@section('title', 'Edit Statistik')

@section('content')

<div class="container">

    <div class="card">

        <div class="card-body">

            <form action="{{ route('admin.statistics.update', $statistic->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <input type="text"
                    name="title"
                    class="form-control mb-2"
                    value="{{ $statistic->title }}">

                <input type="number"
                    name="total"
                    class="form-control mb-2"
                    value="{{ $statistic->total }}">

                <input type="text"
                    name="icon"
                    class="form-control mb-2"
                    value="{{ $statistic->icon }}">

                <select name="color"
                    class="form-control mb-3">

                    <option value="primary" @selected($statistic->color == 'primary')>Primary</option>
                    <option value="success" @selected($statistic->color == 'success')>Success</option>
                    <option value="warning" @selected($statistic->color == 'warning')>Warning</option>
                    <option value="danger" @selected($statistic->color == 'danger')>Danger</option>

                </select>

                <button class="btn btn-primary">
                    Update
                </button>

            </form>

        </div>

    </div>

</div>

@endsection