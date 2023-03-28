@extends('layouts.main')

@section('content')
    <div class="mx-auto px-8 pt-4 md:pt-8">
        <div class="popular-shows">
            <h2 class="uppercase tracking-wider text-orange-500 text-4xl font-semibold">
                popular shows
            </h2>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 md:grid-cols-4 lg:grid-cols-5">
                @foreach($popularTv as $tvshow)
                    <x-tv-card :tv="$tvshow"/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mx-auto px-8 pt-4 md:pt-8">
        <div class="top-rated-shows">
            <h2 class="uppercase tracking-wider text-orange-500 text-4xl font-semibold">
                top rated shows
            </h2>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 md:grid-cols-4 lg:grid-cols-5">
                @foreach($topRatedTv as $topTv)
                    <x-tv-card :tv="$topTv"/>
                @endforeach
            </div>
        </div>
    </div>
    @extends('components.flash')
@endsection
