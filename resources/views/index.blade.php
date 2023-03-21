@extends('layouts.main')

@section('content')
    <div class="mx-auto px-8 pt-8 md:pt-12">
        <div class="popular-movie">
            <h2 class="uppercase tracking-wider text-orange-500 text-4xl font-semibold">
                popular movie
            </h2>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 md:grid-cols-4 lg:grid-cols-5">
                @foreach($popularMovies as $popularMovie)
                    <x-movie-card :movie="$popularMovie" :genres="$genres"/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mx-auto px-8 pt-8 md:pt-12">
        <div class="now-playing-movie">
            <h2 class="uppercase tracking-wider text-orange-500 text-4xl font-semibold">
                now playing movie
            </h2>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 md:grid-cols-4 lg:grid-cols-5">
                @foreach($nowPlayingMovies as $nowPlayingMovie)
                    <x-movie-card :movie="$nowPlayingMovie" :genres="$genres"/>
                @endforeach
            </div>
        </div>
    </div>
@endsection
