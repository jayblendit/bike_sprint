@extends('layouts.app2')

@section('content')   
<div class ="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Distance ID</th>
                <th>Created by</th>
                <th>No. of Players</th>
                <th>Status</th>
            </tr>
        </thead>
            @foreach ($bike_games as $bike_game)
        <tbody>
                <tr>
                    <td>{{ $bike_game->title }}</td>
                    <td>{{ $bike_game->distance_id }}</td>
                    <td>{{ $bike_game->created_by }}</td>  
                    <td>{{ $bike_game->no_of_players }}</td>        
                    <td>{{ $bike_game->status }}</td>     
                </tr>
        </tbody>
            @endforeach
    </table>
</div>
@endsection




