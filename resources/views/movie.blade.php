@extends('layouts.default')

@section('title', 'Movie')
@section('content')
    <div class="container">
        <section id="hero">
            <h1>{{$movie['title']}}</h1>
        </section>
        </section>
    </div>
@endsection