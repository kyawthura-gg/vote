<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vote</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans gray-background text-gray-900 text-sm" style="background-color: #f7f8fc;">
    <header class="flex items-center justify-between px-8 py-4">
        <a href="#"><img src="{{ asset('img/logo.svg') }}" alt=""></a>
        <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log out') }}
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
            <a href="#">
                <img src="{{ asset('img/avatar-vote.jpg') }}" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
        </div>
    </header>
    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Add idea form Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias earum eaque provident, debitis nostrum iure velit necessitatibus laudantium non corporis.
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase border-b-4 pb-3 space-x-10 font-semibol">
                    <li><a href="#" class=" border-b-4 pb-3 border-blue">All Idea (87)</a></li>
                    <li><a href="#" class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue text-gray-400">Considering (6)</a></li>
                    <li><a href="#" class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue text-gray-400">In Progress (1)</a></li>
                </ul>
                <ul class="flex uppercase border-b-4 pb-3 space-x-10">
                    <li><a href="#" class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue text-gray-400">Implemented (10)</a></li>
                    <li><a href="#" class="transition duration-150 ease-in border-b-4 pb-3 hover:border-blue text-gray-400">Closed (55)</a></li>
                </ul>
            </nav>
            <div class="mt-8">

                {{ $slot }}
            </div>
        </div>
    </main>
</body>

</html>