<div class="mt-8">
    <a href="{{route('movies.show', $movie['id'])}}" class="hover:opacity-70">
        <img src="{{$movie['poster_path']}}" alt="{{$movie['title']}}">
    </a>
    <div>
        <a href="{{route('movies.show', $movie['id'])}}" class="mt-3 text-lg text-gray-50 hover:text-gray-300">{{$movie['title']}}</a>
        <div class="flex items-center mt-1 text-gray-300 text-sm">
            <svg height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 47.94 47.94" xml:space="preserve" fill="#000000"><path style="fill:#ED8A19;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"></path></svg>
            <span class="ml-1">{{$movie['vote_average']}}</span>
            <span class="mx-2">|</span>
            <span>{{$movie['release_date']}}</span>
        </div>
        <div class="text-gray-400 text-sm">
            {{$movie['genres']}}
        </div>
    </div>
</div>
