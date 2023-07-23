<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('seo_title') | CodeThreads</title>

    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100">

    @auth
        @include('modules.aside')
    @else
        @include('modules.header')
    @endauth

    <main class="sm:ml-64 mt-24 md:mt-32 mb-16">
        <div class="container mx-auto">
            <h1 class="font-black text-center text-3xl mb-10">
                @yield('title')
            </h1>
            @yield('body')
        </div>
    </main>

    @guest
        @include('modules.footer')
    @endguest

    @vite('resources/js/app.js')

    @yield('scripts')

</body>

</html>
