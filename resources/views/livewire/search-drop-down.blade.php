<div class="relative mt-3 sm:ml-3 sm:mt-0" x-data="{isOpen: true}" @click.away="isOpen = false">
    <label>
        <input
            wire:model.debounce.500ms="search"
            type="text"
            class="bg-gray-800 rounded-full w-30 pl-10 pr-3 py-1 focus:outline-none focus:outline-gray-600 text-white"
            placeholder="Search"
            @focus="isOpen = true"
            @keydown="isOpen = true"
            @keydown.shift.tab="isOpen = false"
            @keydown.escape.window="isOpen = false"
        >
    </label>
    <div class="absolute top-0">
        <svg class="mt-1.5 ml-2.5" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffae52" transform="rotate(0)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 15L21 21" stroke="237" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="237" stroke-width="2"></path> </g></svg><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M15 15L21 21" stroke="237" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="237" stroke-width="2"></path> </g></svg>
    </div>
    <div wire:loading class="spinner top-4 right-4"></div>
    @if(strlen($search) >= 2)
        <div class="z-50 absolute bg-gray-800 text-sm rounded w-30 mt-4" x-show="isOpen">
            @if($searchResults->count() > 0)
                <ul>
                    @foreach($searchResults as $searchResult)
                        <div class="border-b border-gray-700">
                            <li>
                                <a
                                    href="{{route('movies.show', $searchResult['id'])}}"
                                    class="flex items-center block px-2 py-2 hover:bg-gray-700 overflow-hidden"
                                    @if($loop->last) @keydown.tab.exact="isOpen = false" @endif
                                >
                                    @if($searchResult['poster_path'])
                                        <img src="{{'https://image.tmdb.org/t/p/w500/' . $searchResult['poster_path']}}" width="40" alt="{{$searchResult['original_title']}}">
                                    @else
                                        <img src="https://via.placeholder.com/40x60" alt="{{$searchResult['original_title']}}">
                                    @endif
                                    <div class="flex flex-col ml-3">
                                        <span class="font-semibold">{{$searchResult['original_title']}}</span>
                                        <span class="text-gray-500 text-xs">{{\Carbon\Carbon::parse($searchResult['release_date'])->format('d M, Y')}}</span>
                                    </div>
                                </a>
                            </li>
                        </div>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{$search}}"</div>
            @endif
        </div>
    @endif
</div>
