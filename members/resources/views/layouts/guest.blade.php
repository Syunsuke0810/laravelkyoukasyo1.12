<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel1.8') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-gray-900 bg-gradient-to-r from-orange-400 to-purple-400">
        <div class="font-sans antialiased text-gray-900">
            <div class="container w-full p-6 mx-auto">
                <div class="flex items-center justify-between w-full">

                    <a href="{{route('top')}}">
                    <img src="{{asset('logo/unnamed .png')}}" class="h-12 w-62">
                    </a>

                    <div class="flex content-center justify-end w-1/2">
                        {{-- ログイン・登録部分 --}}
                        @if (Route::has('login'))
                        <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/post') }}" class="text-sm text-gray-700 underline dark:text-gray-500">HOME</a>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-base font-bold text-gray-700 underline dark:text-gray-500">ログイン</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-base font-bold text-gray-700 underline dark:text-gray-500">登録</a>
                                @endif
                            @endauth
                        @endif
                        </div>
                    </div>
                </div>
            </div>
           <div class="container w-full p-6 mx-auto">
               {{ $slot }}
           </div>
        </div>
        </div>
    </body>
</html>
