@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="card" >
            <div class="card-body">
              <h5 class="card-title text-black">{{$movie->title}}</h5>
              <span class="card-text text-black">Titolo originale: {{$movie->original_title}}</span>
              <br>
              <span class="card-text text-black">Nazionalità: {{$movie->nationality}}</span>
              <br>
              <span class="card-text text-black">Data di uscita: {{$movie->date}}</span>
              <br>
              <span class="card-text text-black">Voto: {{$movie->vote}}</span>
            </div>
          </div>
    </div>
@endsection
