@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            
            <tbody>
                    <tr>
                        <th scope="row">{{ $wines->winery }}</th>
                        <td>{{ $wines->name }}</td>
                        <td>{{ $wines->rating }}</td>
                        <td>{{ $wines->rating_count }}</td>
                        <td></td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
