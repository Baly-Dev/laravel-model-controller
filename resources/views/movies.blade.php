@extends('layouts.default')

@section('title', 'Movies')
@section('css')
    <link rel="stylesheet" href="{{asset('css/movies.css')}}">
@endsection
@section('content')
    <div class="container">
        <section id="hero">
            <h1>Movies</h1>
        </section>
        <section id="movies" class="card-group">
            @foreach($movies as $key => $movie)
                @include('components.movie_card')
            @endforeach
        </section>
    </div>
@endsection