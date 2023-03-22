@extends('layouts.main')

@section('content')

    {{--    Movie Details--}}
    <div class="movie-info border-b border-gray-800">
        <div class="mx-auto px-8 py-8 md:pt-12 flex flex-col md:flex-row">
            <img src="https://via.placeholder.com/400x600" alt="stuff" class="max-w-80 md:w-80">
            <div class="mt-5 md:mt-0 md:ml-10 lg:ml-20">
                <h1 class="text-4xl font-semibold">Vaneath</h1>
                <div class="mt-2 text-gray-300 text-md">
                    <svg class="inline" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 33 65" xml:space="preserve" fill="#000000"><path style="fill:#ED8A19;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757 c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042 c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685 c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528 c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956 C22.602,0.567,25.338,0.567,26.285,2.486z"></path></svg>
                    <span class="ml-1">Popularity</span>
                    <span class="mx-2">|</span>
                    <span>Born Date</span>
                    <span class="mx-2">|</span>
                    <span>
                        Movies that acting
                    </span>
                </div>
                <p class="mt-8 text-gray-400">Description</p>
            </div>
        </div>
    </div>

    {{--    Caster--}}
    <div class="credits border-b border-gray-800">
        <div class="mx-auto p-8 md:pt-12">
            <h2 class="uppercase tracking-wider text-gray-300 text-2xl font-semibold">
                Credits
            </h2>
        </div>
    </div>
@endsection
