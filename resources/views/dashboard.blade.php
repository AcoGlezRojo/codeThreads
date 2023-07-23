@extends('layouts.app')
@section('seo_title')
    @if (auth()->user()->id == $user->id)
        dashboard
    @else
        {{ __('Perfil de') }} {{ $user->username }}
    @endif
@endsection
@section('title')
    @if (auth()->user()->id == $user->id)
        dashboard
    @else
        {{ __('Perfil de') }} {{ $user->username }}
    @endif
@endsection

@section('body')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ $user->imagen ? asset('perfiles') . '/' . $user->imagen : asset('assets/img/usuario.svg') }}"
                    alt="imagen usuario" />
            </div>

            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start py-10 md:py-10">
                <div class="flex items-center gap-2">
                    <p class="text-gray-700 text-2xl">{{ $user->username }}</p>
                    @auth
                        @if ($user->id === auth()->user()->id)
                            <a href="#" class="text-gray-500 hover:text-gray-600 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </a>
                        @endif
                    @endauth
                </div>


                <p class="text-gray-800 text-sm mb-3 font-bold mt-5">
                    0
                    <span class="font-normal"> seguidores </span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal"> Siguiendo </span>
                </p>

                <p class="text-gray-800 text-sm mb-3 font-bold">
                    0
                    <span class="font-normal"> Posts</span>
                </p>


            </div>
        </div>
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
