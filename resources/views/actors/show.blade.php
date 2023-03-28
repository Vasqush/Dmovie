@extends('layouts.main')

@section('content')

    {{--    Movie Details--}}
    <div class="movie-info border-b border-gray-800">
        <div class="mx-auto px-8 py-8 md:pt-12 flex flex-col md:flex-row">
            <img src="{{$popularActor['profile_path']}}" class="h-max" alt="stuff">
            <div class="mt-5 md:mt-0 md:ml-10 lg:ml-20">
                <div class="flex">
                    <h1 class="text-4xl font-semibold">{{$popularActor['name']}}</h1>
                    <ul class="flex items-center ml-5 gap-3">
                        @if($social['twitter'])
                            <li>
                                <a href="{{$social['twitter']}}" target="_blank">
                                    <svg id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 455.731 455.731" xml:space="preserve" width="27px" height="27px" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <rect x="0" y="0" style="fill:#50ABF1;" width="455.731" height="455.731"></rect> <path style="fill:#FFFFFF;" d="M60.377,337.822c30.33,19.236,66.308,30.368,104.875,30.368c108.349,0,196.18-87.841,196.18-196.18 c0-2.705-0.057-5.39-0.161-8.067c3.919-3.084,28.157-22.511,34.098-35c0,0-19.683,8.18-38.947,10.107 c-0.038,0-0.085,0.009-0.123,0.009c0,0,0.038-0.019,0.104-0.066c1.775-1.186,26.591-18.079,29.951-38.207 c0,0-13.922,7.431-33.415,13.932c-3.227,1.072-6.605,2.126-10.088,3.103c-12.565-13.41-30.425-21.78-50.25-21.78 c-38.027,0-68.841,30.805-68.841,68.803c0,5.362,0.617,10.581,1.784,15.592c-5.314-0.218-86.237-4.755-141.289-71.423 c0,0-32.902,44.917,19.607,91.105c0,0-15.962-0.636-29.733-8.864c0,0-5.058,54.416,54.407,68.329c0,0-11.701,4.432-30.368,1.272 c0,0,10.439,43.968,63.271,48.077c0,0-41.777,37.74-101.081,28.885L60.377,337.822z"></path> </g> </g></svg>
                                </a>
                            </li>
                        @endif
                        @if($social['facebook'])
                                <li>
                                    <a href="{{$social['facebook']}}" target="_blank">
                                        <svg width="27px" height="27px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -160.000000)" fill="#4460A0"> <path d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z" id="Facebook"> </path> </g> </g> </g></svg>
                                    </a>
                                </li>
                        @endif
                        @if($social['instagram'])
                            <li>
                                <a href="{{$social['instagram']}}" target="_blank">
                                    <svg width="32px" height="32px" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint0_radial_87_7153)"></rect> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint1_radial_87_7153)"></rect> <rect x="2" y="2" width="28" height="28" rx="6" fill="url(#paint2_radial_87_7153)"></rect> <path d="M23 10.5C23 11.3284 22.3284 12 21.5 12C20.6716 12 20 11.3284 20 10.5C20 9.67157 20.6716 9 21.5 9C22.3284 9 23 9.67157 23 10.5Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M16 21C18.7614 21 21 18.7614 21 16C21 13.2386 18.7614 11 16 11C13.2386 11 11 13.2386 11 16C11 18.7614 13.2386 21 16 21ZM16 19C17.6569 19 19 17.6569 19 16C19 14.3431 17.6569 13 16 13C14.3431 13 13 14.3431 13 16C13 17.6569 14.3431 19 16 19Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M6 15.6C6 12.2397 6 10.5595 6.65396 9.27606C7.2292 8.14708 8.14708 7.2292 9.27606 6.65396C10.5595 6 12.2397 6 15.6 6H16.4C19.7603 6 21.4405 6 22.7239 6.65396C23.8529 7.2292 24.7708 8.14708 25.346 9.27606C26 10.5595 26 12.2397 26 15.6V16.4C26 19.7603 26 21.4405 25.346 22.7239C24.7708 23.8529 23.8529 24.7708 22.7239 25.346C21.4405 26 19.7603 26 16.4 26H15.6C12.2397 26 10.5595 26 9.27606 25.346C8.14708 24.7708 7.2292 23.8529 6.65396 22.7239C6 21.4405 6 19.7603 6 16.4V15.6ZM15.6 8H16.4C18.1132 8 19.2777 8.00156 20.1779 8.0751C21.0548 8.14674 21.5032 8.27659 21.816 8.43597C22.5686 8.81947 23.1805 9.43139 23.564 10.184C23.7234 10.4968 23.8533 10.9452 23.9249 11.8221C23.9984 12.7223 24 13.8868 24 15.6V16.4C24 18.1132 23.9984 19.2777 23.9249 20.1779C23.8533 21.0548 23.7234 21.5032 23.564 21.816C23.1805 22.5686 22.5686 23.1805 21.816 23.564C21.5032 23.7234 21.0548 23.8533 20.1779 23.9249C19.2777 23.9984 18.1132 24 16.4 24H15.6C13.8868 24 12.7223 23.9984 11.8221 23.9249C10.9452 23.8533 10.4968 23.7234 10.184 23.564C9.43139 23.1805 8.81947 22.5686 8.43597 21.816C8.27659 21.5032 8.14674 21.0548 8.0751 20.1779C8.00156 19.2777 8 18.1132 8 16.4V15.6C8 13.8868 8.00156 12.7223 8.0751 11.8221C8.14674 10.9452 8.27659 10.4968 8.43597 10.184C8.81947 9.43139 9.43139 8.81947 10.184 8.43597C10.4968 8.27659 10.9452 8.14674 11.8221 8.0751C12.7223 8.00156 13.8868 8 15.6 8Z" fill="white"></path> <defs> <radialGradient id="paint0_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(12 23) rotate(-55.3758) scale(25.5196)"> <stop stop-color="#B13589"></stop> <stop offset="0.79309" stop-color="#C62F94"></stop> <stop offset="1" stop-color="#8A3AC8"></stop> </radialGradient> <radialGradient id="paint1_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(11 31) rotate(-65.1363) scale(22.5942)"> <stop stop-color="#E0E8B7"></stop> <stop offset="0.444662" stop-color="#FB8A2E"></stop> <stop offset="0.71474" stop-color="#E2425C"></stop> <stop offset="1" stop-color="#E2425C" stop-opacity="0"></stop> </radialGradient> <radialGradient id="paint2_radial_87_7153" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(0.500002 3) rotate(-8.1301) scale(38.8909 8.31836)"> <stop offset="0.156701" stop-color="#406ADC"></stop> <stop offset="0.467799" stop-color="#6A45BE"></stop> <stop offset="1" stop-color="#6A45BE" stop-opacity="0"></stop> </radialGradient> </defs> </g></svg><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> </defs> <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Color-" transform="translate(-200.000000, -160.000000)" fill="#4460A0"> <path d="M225.638355,208 L202.649232,208 C201.185673,208 200,206.813592 200,205.350603 L200,162.649211 C200,161.18585 201.185859,160 202.649232,160 L245.350955,160 C246.813955,160 248,161.18585 248,162.649211 L248,205.350603 C248,206.813778 246.813769,208 245.350955,208 L233.119305,208 L233.119305,189.411755 L239.358521,189.411755 L240.292755,182.167586 L233.119305,182.167586 L233.119305,177.542641 C233.119305,175.445287 233.701712,174.01601 236.70929,174.01601 L240.545311,174.014333 L240.545311,167.535091 C239.881886,167.446808 237.604784,167.24957 234.955552,167.24957 C229.424834,167.24957 225.638355,170.625526 225.638355,176.825209 L225.638355,182.167586 L219.383122,182.167586 L219.383122,189.411755 L225.638355,189.411755 L225.638355,208 L225.638355,208 Z" id="Facebook"> </path> </g> </g> </g></svg>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="mt-2 text-gray-300 text-md">
                    <svg class="inline" fill="#ffbb00" height="16px" width="16px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 570 600" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 470 470" stroke="#ffbb00"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="m462.5,420h-35.876v-142.99c0-0.02 0-30.01 0-30.01 0-26.191-21.309-47.5-47.5-47.5h-116.624v-68.191c0-9.649-7.851-17.5-17.5-17.5h-2.5v-22.5c0-4.142-3.358-7.5-7.5-7.5s-7.5,3.358-7.5,7.5v22.5h-2.5c-9.649,0-17.5,7.851-17.5,17.5v68.191h-123.043c-26.191,0-47.5,21.309-47.5,47.5v173h-29.457c-4.142,0-7.5,3.358-7.5,7.5s3.358,7.5 7.5,7.5h4.343l4.325,15.137c3.182,11.138 14.748,19.863 26.332,19.863h385c11.584,0 23.15-8.725 26.332-19.862l4.325-15.138h4.343c4.142,0 7.5-3.358 7.5-7.5s-3.358-7.5-7.5-7.5zm-240-288.691c0-1.355 1.145-2.5 2.5-2.5h20c1.355,0 2.5,1.145 2.5,2.5v68.191h-25v-68.191zm-138.043,83.191h294.667c17.92,0 32.5,14.58 32.5,32.5v23c-13.563,1.819-21.473,8.441-28.555,14.402-7.553,6.357-13.519,11.378-26.396,11.378s-18.842-5.021-26.396-11.378c-8.299-6.985-17.706-14.903-36.055-14.903-18.347,0-27.752,7.917-36.051,14.903-7.552,6.357-13.517,11.378-26.391,11.378-12.875,0-18.839-5.021-26.392-11.378-8.299-6.985-17.705-14.903-36.052-14.903-18.347,0-27.752,7.917-36.051,14.903-4.436,3.734-8.626,7.262-14.052,9.321-2.912,1.105-4.838,3.896-4.838,7.012v51.285c0,4.136-3.364,7.5-7.5,7.5-4.135,0-7.5-3.364-7.5-7.5v-51.039c0.105-3.161-1.803-6.105-4.835-7.256-5.427-2.06-9.618-5.588-14.054-9.323-7.081-5.961-14.989-12.583-28.55-14.402v-23c0.001-17.92 14.58-32.5 32.501-32.5zm-32.5,70.688c8.032,1.574 12.983,5.717 18.89,10.69 3.871,3.258 8.145,6.856 13.55,9.688v46.454c0,12.407 10.093,22.5 22.5,22.5s22.5-10.093 22.5-22.5l.001-46.454c5.404-2.832 9.679-6.43 13.549-9.688 7.552-6.357 13.517-11.378 26.391-11.378 12.875,0 18.84,5.021 26.392,11.378 8.299,6.985 17.705,14.903 36.052,14.903s27.753-7.917 36.051-14.903c7.552-6.357 13.517-11.378 26.391-11.378 12.877,0 18.843,5.021 26.396,11.379 8.299,6.985 17.706,14.902 36.055,14.902s27.755-7.917 36.055-14.902c5.909-4.973 10.861-9.117 18.896-10.691v134.812h-359.669v-134.812zm387.452,160.829c-1.343,4.701-7.02,8.983-11.909,8.983h-385c-4.89,0-10.566-4.282-11.909-8.983l-3.148-11.017h415.114l-3.148,11.017z"></path> <path d="m205.002,95.547c1.778,0 3.563-0.628 4.993-1.905 3.09-2.759 3.358-7.5 0.6-10.59-5.353-5.995-8.3-13.71-8.3-21.726 0-17.564 13.299-35.9 32.706-45.552 19.407,9.651 32.706,27.987 32.706,45.552 0,8.016-2.948,15.731-8.3,21.726-2.759,3.089-2.491,7.831 0.599,10.589 3.088,2.758 7.83,2.491 10.589-0.599 7.81-8.747 12.111-20.01 12.111-31.716 0-24.235-18.382-49.196-44.702-60.699-1.915-0.837-4.092-0.836-6.007,0-26.32,11.503-44.702,36.463-44.702,60.698 0,11.706 4.301,22.969 12.111,31.716 1.481,1.661 3.534,2.507 5.596,2.506z"></path> </g> </g></svg>
                    <span class="ml-1">{{$popularActor['birthday']}} ({{$popularActor['age']}} years old) in {{$popularActor['place_of_birth']}}</span>
                </div>
                <p class="mt-8 text-gray-400">{{$popularActor['biography']}}</p>
                <h4 class="font-semibold mt-12">Known For</h4>
                <div class="grid justify-center gap-5 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5">
                    @foreach($knownForTitles as $knownForTitle)
                        <div class="mt-3">
                            <a href="{{route('movies.show', $knownForTitle['id'])}}">
                                <img class="hover:opacity-80" src="{{$knownForTitle['poster_path']}}" alt="">
                            </a>
                            <div class="mt-3">
                                <a class="text-white font-semibold hover:opacity-80" href="#">{{$knownForTitle['title']}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="mx-10 credits border-b border-gray-800">
        <div class="mx-auto p-8 md:pt-12">
            <h2 class="uppercase tracking-wider text-gray-300 text-2xl font-semibold">
                Credits
            </h2>
            <ul class="mt-5">
                @foreach($credits as $credit)
                    <li class="text-gray-300 mb-2">{{$credit['release_date']}} &middot;
                        <strong class="text-yellow-500">{{$credit['title']}}</strong>
                        as {{$credit['character']}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
