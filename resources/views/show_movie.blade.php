@extends('layouts.main')

@section('content')

{{--    Movie Details--}}
    <div class="movie-info border-b border-gray-800">
        <div class="mx-auto px-8 py-8 md:pt-12 flex flex-col md:flex-row">
            <img src="{{$movieDetails['poster_path']}}" alt="{{$movieDetails['title']}}" class="max-w-80 md:w-80">
            <div class="mt-5 md:mt-0 md:ml-10 lg:ml-20">
                <h1 class="text-4xl font-semibold">{{$movieDetails['original_title']}}</h1>
                <div class="mt-2 text-gray-300 text-md">
                    <svg class="inline" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 33 65" xml:space="preserve" fill="#000000"><path style="fill:#ED8A19;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"></path></svg>
                    <span class="ml-1">{{$movieDetails['vote_average']}}</span>
                    <span class="mx-2">|</span>
                    <span>{{($movieDetails['release_date'])}}</span>
                    <span class="mx-2">|</span>
                    <span>
                        {{$movieDetails['genres']}}
                    </span>
                </div>
                <p class="mt-8 text-gray-400">{{$movieDetails['overview']}}</p>
                <div class="mt-12">
                    <h3 class="text-2xl font-semibold">Features Crew</h3>
                    <div class="flex mt-4 gap-5">
                        @foreach($movieDetails['crew'] as $crew)
                            <div class="mr-8">
                                <div class="text-md text-gray-300">{{$crew['original_name']}}</div>
                                <div class="text-sm text-gray-400">{{$crew['known_for_department']}}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="mt-5 md:mt-8">
                    @foreach($movieDetails['videos']['results'] as $video)
                        @if($video['type'] == 'Trailer')
                            <div x-data="{isOpen: false}" class="inline-flex">
                                <div class="mt-1">
                                    <button
                                        @click="isOpen = true"
                                        class="flex inline-flex items-center bg-orange-400 text-gray-900 rounded-md font-semibold px-5 py-4 hover:opacity-80" target="_blank">
                                        <svg class="mr-2" fill="#000000" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60.00 60.00" xml:space="preserve" stroke="#000000" stroke-width="0.7"><g><path d="M45.563,29.174l-22-15c-0.307-0.208-0.703-0.231-1.031-0.058C22.205,14.289,22,14.629,22,15v30 c0,0.371,0.205,0.711,0.533,0.884C22.679,45.962,22.84,46,23,46c0.197,0,0.394-0.059,0.563-0.174l22-15 C45.836,30.64,46,30.331,46,30S45.836,29.36,45.563,29.174z M24,43.107V16.893L43.225,30L24,43.107z"></path> <path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M30,58C14.561,58,2,45.439,2,30 S14.561,2,30,2s28,12.561,28,28S45.439,58,30,58z"></path></g></svg>
                                        {{$video['name']}}
                                    </button>
                                </div>
                                <div style="background-color: rgba(0, 0, 0, .5);"
                                     class="fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"
                                     x-show="isOpen"
                                >
                                    <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                                        <div @click.away="isOpen = false" class="bg-gray-900 rounded">
                                            <div class="flex justify-end pr-4 pt-2">
                                                <button
                                                    @click="isOpen = false"
                                                    class="text-3xl leading-none hover:text-gray-300">
                                                    &times;
                                                </button>
                                            </div>
                                            <div class="modal-body px-8 py-8">
                                                <div class="responsive-container overflow-hidden relative" style="padding-top: 56.25%">
                                                    <iframe width="560" height="315" class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                                            src="https://youtube.com/embed/{{$video['key']}}" style="border: 0;" allow="autoplay; encrypted-media"
                                                            allowfullscreen>
                                                    </iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

{{--    Caster--}}
    <div class="cast border-b border-gray-800">
        <div class="mx-auto p-8 md:pt-12">
            <h2 class="uppercase tracking-wider text-gray-300 text-2xl font-semibold">
                Cast
            </h2>
            <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 sm:gap-8 md:grid-cols-4 lg:grid-cols-5 text-center">
                @foreach($movieDetails['cast'] as $cast)
                    <div class="mt-8">
                        <a href="#" class="hover:opacity-70">
                                <img src="{{'https://image.tmdb.org/t/p/w400/' . $cast['profile_path']}}" alt="actor1">
                        </a>
                        <div>
                            <a href="#" class="mt-3 text-lg text-gray-50 hover:text-gray-300">
                                {{$cast['original_name']}}
                            </a>
                            <div class="text-gray-400 text-sm">
                                {{$cast['character']}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div>
        <p>More movies</p>
    </div>
@endsection
