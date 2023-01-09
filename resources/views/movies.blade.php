@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <h1>Movies</h1>

            <ul>
                @foreach ($movies as $movie)
                <li>{{$movie->title}}</li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection

@section('title')
    Movies
@endsection
