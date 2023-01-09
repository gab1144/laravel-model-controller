@extends('layouts.main')

@section('content')
    <main>
        <div class="container">
            <h1>Movies</h1>

            <div class="row">

                @foreach ($movies as $movie)
                    <div class="col-4 mb-3">
                        <div class="card" >
                            <div class="card-body">
                              <h5 class="card-title text-black">{{$movie->title}}</h5>
                              <h6 class="card-title text-black">{{$movie->vote}}/10</h6>
                            </div>
                          </div>
                    </div>

                @endforeach

            </div>
        </div>
    </main>
@endsection

@section('title')
    Movies
@endsection
