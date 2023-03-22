@extends('layouts.main')

@section('content')
    <div class="mx-auto px-8 pt-8 md:pt-12 pb-16">
{{--    Popular Actors--}}
        <div class="popular-actors">
            <h2 class="uppercase tracking-wider text-orange-500 text-4xl font-semibold">
                Popular Actors
            </h2>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 md:grid-cols-4 lg:grid-cols-5">
                @foreach($popularActors as $actor)
                    <div class="actor mt-8">
                        <a href="{{route('actors.show', $actor['id'])}}" class="hover:opacity-70 transition ease-in-out duration-200">
                            <img src="{{$actor['profile_path']}}" alt="actor">
                        </a>
                        <div class="mt-2">
                            <a href="{{route('actors.show', $actor['id'])}}" class="mr-3 text-lg font-semibold hover:opacity-80">
                                {{$actor['name']}}
                            </a>
                            <span class="text-sm text-gray-300 font-semibold">{{$actor['known_for_department']}}</span>
                            <div class="text-sm text-gray-500 truncate">{{$actor['known_for']}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>  {{--    End Popular Actors--}}
        <div class="page-load-status mt-10 text-center text-4xl font-bold text-gray-500">
            <div class="flex justify-center">
                <div class="infinite-scroll-request spinner my-8 text-3xl">&nbsp;</div>
            </div>
            <p class="infinite-scroll-last">End of content</p>
            <p class="infinite-scroll-error">Error</p>
        </div>

{{--        Comment out this code to use button instead of pagination--}}
{{--        <div class="flex justify-evenly mt-16">--}}
{{--            @if($previous)--}}
{{--                <a href="/actors/page/{{$previous}}" class="w-32 text-center px-4 py-2 text-white bg-amber-500 rounded-sm">Previous</a>--}}
{{--            @else--}}
{{--                <div class="w-32 text-center px-4 py-2 text-white bg-amber-500 rounded-sm">Previous</div>--}}
{{--            @endif--}}
{{--            @if($next)--}}
{{--                <a href="/actors/page/{{$next}}" class="w-32 text-center px-4 py-2 text-white bg-amber-500 rounded-sm">Next</a>--}}
{{--            @else--}}
{{--            <div class="w-32 text-center px-4 py-2 text-white bg-amber-500 rounded-sm">Next</div>--}}
{{--            @endif--}}
{{--        </div>--}}
    </div>
@endsection

@section('scripts')
    <script src="https://unpkg.com/infinite-scroll@4/dist/infinite-scroll.pkgd.min.js"></script>
    <script>
        let elem = document.querySelector('.grid');
        let infScroll = new InfiniteScroll( elem, {
            // options
            path: '/actors/page/@{{#}}',
            append: '.actor',
            status: '.page-load-status'
        });
    </script>
@endsection
