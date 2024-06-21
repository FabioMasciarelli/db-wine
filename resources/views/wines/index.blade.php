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
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wines as $wine)
                    <tr>
                        <th scope="row"><a href="{{ route('wines.show', $wine->id) }}">{{ $wine->winery }}</a></th>
                        <td><a href="{{ route('wines.show', $wine->id) }}">{{ $wine->name }}</a></td>
                        <td><a href="{{ route('wines.show', $wine->id) }}">{{ $wine->rating }}</a></td>
                        <td><a href="{{ route('wines.show', $wine->id) }}">{{ $wine->rating_count }}</a></td>
                        <td>
                            <form action="{{ route('wines.destroy', $wine->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
