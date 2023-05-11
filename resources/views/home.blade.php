
@extends('layout.app')

@section('title', 'Home page')

@section('content')

    @foreach ($movies as $movie)
        <div class="card mb-3 p-3 bg-danger text-white" style="width: 18rem;">
            <div class="card-body text-center">
                <h3 class="card-title pb-3">TITLE: {{$movie->title}}</h3>
                <h5 class="card-subtitle mb-2 text-body-secondary">ORIGINAL TITLE: {{$movie->original_title}}</h5>
                <p class="card-text py-2">NATION: {{$movie->nationality}}</p>
                <p class="card-text py-2">DATE: {{$movie->date}}</p>
                <p class="card-text py-2">VOTE: {{$movie->vote}}</p>
            </div>
        </div>
    @endforeach

@endsection