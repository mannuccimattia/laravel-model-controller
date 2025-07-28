@extends('layouts.master')

@section('title')
    Home | Laravel Movies
@endsection

@section('content')
    <div class="container">
        <div class="row g-3">
            @foreach ($movies as $movie)
                <x-movie-card :movie="$movie" />
            @endforeach
        </div>
    </div>
@endsection
