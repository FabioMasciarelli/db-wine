@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('wines.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="winery" class="form-label">Brand</label>
                <input type="text" class="form-control" id="winery" name="winery">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating">
            </div>
            <div class="mb-3">
                <label for="rating_count" class="form-label">Rating Count</label>
                <input type="text" class="form-control" id="rating_count" name="rating_count">
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>

        </form>
    </div>
@endsection
