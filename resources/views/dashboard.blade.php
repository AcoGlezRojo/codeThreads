@extends('layouts.app')

@section('title')
    dashboard
@endsection

@section('body')
    @if (session('status'))
        <div id="alert"
            class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400 w-1/5 absolute right-2 bottom-2 alert"
            role="alert">
            {{ session('status') }}
        </div>
    @endif

    <section class="container mt-16 md:mt-32 mx-auto md:flex justify-center">
        <div class="flex md:w-8/12 lg:w-6/12 w-full ">
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('assets/img/usuario.svg') }}" alt="{{ auth()->user()->username }}">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5">
                <p class="text-gray-700 text-2xl">{{ auth()->user()->username }}</p>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        @if (session('status'))
            const alert = document.getElementById('alert');

            var hideAlert = setTimeout(function() {
                alert.classList.add('hidden');
            }, 5000);
        @endif
    </script>
@endsection
