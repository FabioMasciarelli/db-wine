@extends('layouts.app')

@section('content')

    <h1>Modifica Vino</h1>
    <form action="{{ route('wines.update', $wine->id) }}" method="POST">
    @csrf
    @method('PUT')
        
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" id="brand" name="winery" value="{{ $wine->winery }}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $wine->name }}">
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="text" class="form-control" id="rating" name="rating" value="{{ $wine->rating }}">
            </div>
            <div class="mb-3">
                <label for="rating_count" class="form-label">Rating Count</label>
                <input type="text" class="form-control" id="rating_count" name="rating_count" value="{{ $wine->rating_count }}">
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        
    </form>
@endsection
