@extends('layouts.app')
@section('seo_title')
    Inicio
@endsection
@section('title')
    Bienvenido a CodeThreads
@endsection

@section('body')
    <div>
        <p class="text-sm text-center">{{ __('La mayor comunidad de programadores') }}</p>
    </div>

    @if (session('status'))
        <div id="alert"
            class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-200 dark:bg-gray-800 dark:text-green-400 w-1/5 absolute right-2 bottom-2 alert"
            role="alert">
            {{ session('status') }}
        </div>
    @endif
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
