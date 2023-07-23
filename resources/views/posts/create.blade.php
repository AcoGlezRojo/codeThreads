@extends('layouts.app')
@section('seo_title')
    {{ __('Crear post') }}
@endsection
@section('title')
    {{ __('Crea una nueva publicación') }}
@endsection

@section('body')
    <div class="w-full flex flex-col items-center justify-center md:flex-row md:px-0 px-4">
        <div class="md:w-4/12 w-100 px-5">
            imagen aquí
        </div>

        <div class="md:w-4/12 w-full md:gap-10 bg-white p-6 rounded-lg shadow-xl mt-10 md:mt-0">

            <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST" autocomplete="off">
                @csrf
                <!-- name -->
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{ __('Título') }}
                    </label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                            focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700
                             dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                              dark:focus:border-blue-500 @error('name') border-red-500 @enderror"
                        placeholder="{{ __('Título') }}" value={{ old('name') }}>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <!-- description -->
                <div>
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        {{ __('Descripción') }}
                    </label>
                    <textarea name="description" id="description" name="description" cols="10" rows="3"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700
                         dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                          dark:focus:border-blue-500 @error('description') border-red-500 @enderror"
                        placeholder="{{ __('Descripción') }}">
                            {{ old('description') }}
                        </textarea>
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <!-- submit -->
                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    {{ __('Crear publicación') }}
                </button>
            </form>
        </div>
    </div>
@endsection
