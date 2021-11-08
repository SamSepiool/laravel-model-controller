@extends('layout.main')

@section('title', 'MOVIES - home')

@section('content')


<div class="container">

<h1>MOVIES</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>
                TITLE:
                <h2><a href="">{{$movie['title']}}</a></h2>
                ORIGINAL-TITLE:
                <h2>{{$movie['original_title']}}</h2>
                NATIONALITY:
                <h2>{{$movie['nationality']}}</h2>
                DATE:
                <h2>{{$movie['date']}}</h2>
                VOTE:
                <h2>{{$movie['vote']}}</h2>
            </li>
        @endforeach 
    </ul>
</div>

    
@endsection