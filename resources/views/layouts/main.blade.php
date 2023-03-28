<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dmovie</title>
    @vite('resources/css/app.css')
    @livewireStyles
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans pt-24 sm:pt-16 bg-gray-900 text-yellow-500">
    <nav class="nav fixed top-0 bg-gray-900 z-50 w-full border-b border-gray-800" id="nav">
        <div class="mx-auto my-5 px-6 flex flex-col sm:flex-row sm:my-5 items-center justify-between">
            <ul class="flex items-center">
                <li class="">
                    <a href="/" class="inline-flex">
                        <svg fill="#ffae00" height="20px" width="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 277.446 277.446" xml:space="preserve" stroke="#ffae00"><g id="SVGRepo_iconCarrier"> <path id="_x30_6-Movie_Clapper" d="M59.488,117.299c-0.504-4.237-2.007-8.171-4.273-11.556l202.992-67.776L247.552,6.051 c-1.549-4.638-6.566-7.141-11.201-5.594L15.54,74.182c-4.635,1.547-7.143,6.563-5.594,11.201l5.225,15.647 c-5.216,4.843-8.488,11.752-8.488,19.415c0,9.924,5.486,18.586,13.582,23.127v125.02c0,4.891,3.967,8.853,8.854,8.853h232.793 c4.885,0,8.852-3.963,8.852-8.853V117.299H59.488z M188.869,26.724l26.875-8.973l-6.467,26.14l-26.875,8.973L188.869,26.724z M122.47,48.893l26.877-8.973l-6.467,26.139l-26.875,8.974L122.47,48.893z M33.181,133.946c-7.442,0-13.498-6.056-13.498-13.5 c0-7.444,6.056-13.5,13.498-13.5c7.444,0,13.5,6.056,13.5,13.5C46.681,127.89,40.625,133.946,33.181,133.946z M56.074,71.062 l26.877-8.973l-6.467,26.14l-26.877,8.974L56.074,71.062z M82.476,147.192H54.142l14.412-22.746h28.334L82.476,147.192z M138.554,124.446h28.334l-14.412,22.746h-28.334L138.554,124.446z M131.599,234.372v-60l47.783,30L131.599,234.372z M222.476,147.192h-28.334l14.412-22.746h28.334L222.476,147.192z"></path> </g></svg>
                        <p class="pl-3 font-extrabold">Dmovie</p>
                    </a>
                </li>
                <li class="ml-4 md:ml-12 hover:text-yellow-600">
                    <a href="{{route('movies.index')}}">Movies</a>
                </li>
                <li class="ml-4 md:ml-8 hover:text-yellow-600">
                    <a href="#">TV Shows</a>
                </li>
                <li class="ml-4 md:ml-8 hover:text-yellow-600">
                    <a href="{{route('actors.index')}}">Actors</a>
                </li>
            </ul>

            <div class="flex gap-5 sm:gap-0 items-center">
                <livewire:search-drop-down/>
                <div class="mt-4 sm:ml-3 sm:mt-0 flex items-center">
                    @auth
                        <form action="/logout" method="post" class="bg-yellow-500 text-gray-900 py-1 px-2 rounded-xl font-bold text-sm hover:bg-yellow-600 mr-4">
                            @csrf

                            <button type="submit"class="uppercase" >Log Out</button>
                        </form>
                        <a href="#">
                            <img src="{{url('/assets/images/just_meee.png')}}" alt="avatar" class="w-7 h-7 rounded-full">
                        </a>
                    @else
                        <a href="/register" class="bg-yellow-500 text-gray-900 py-1 px-2 rounded-xl font-bold text-sm hover:bg-yellow-600 uppercase">Register</a>
                        <a href="/login" class="ml-4 bg-yellow-500 text-gray-900 py-1 px-2 rounded-xl font-bold text-sm hover:bg-yellow-600 uppercase">login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @livewireScripts
    @yield('scripts')
</body>
</html>

<script>
    (function(){

        let doc = document.documentElement;
        let w   = window;

        let curScroll;
        let prevScroll = w.scrollY || doc.scrollTop;
        let curDirection = 0;
        let prevDirection = 0;

        let header = document.getElementById('nav');
        let toggled;
        let threshold = 200;

        let checkScroll = function() {
            curScroll = w.scrollY || doc.scrollTop;
            if(curScroll > prevScroll) {
                // scrolled down
                curDirection = 2;
            }
            else {
                //scrolled up
                curDirection = 1;
            }

            if(curDirection !== prevDirection) {
                toggled = toggleHeader();
            }

            prevScroll = curScroll;
            if(toggled) {
                prevDirection = curDirection;
            }
        };

        let toggleHeader = function() {
            toggled = true;
            if(curDirection === 2 && curScroll > threshold) {
                header.classList.add('nav-out');
                header.classList.remove('nav-in')
            }
            else if (curDirection === 1) {
                header.classList.add('nav-in')
                header.classList.remove('nav-out');
            }
            else {
                toggled = false;
            }
            return toggled;
        };

        window.addEventListener('scroll', checkScroll);

    })();
</script>
