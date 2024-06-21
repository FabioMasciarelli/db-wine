@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Brand</th>
                    <th scope="col">Name</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Rating Count</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine)
                    
                <tr>
                    <th scope="row">{{ $wine->winery }}</th>
                    <td>{{ $wine->name }}</td>
                    <td>{{ $wine->rating }}</td>
                    <td>{{ $wine->rating_count }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection
