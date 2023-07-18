@extends('layouts.app')

@section('title')
    Crear cuenta
@endsection

@section('body')
    <section class="container mt-16 md:mt-32 mx-auto">
        <div class=" flex flex-col items-center justify-center px-6 py-8 lg:py-0 ">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="md:flex md-justify-center p-6 space-y-4 md:space-y-6 sm:p-8 gap-x-8">
                    <div class="md:w-5/12">
                        <h1
                            class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white mb-3">
                            {{ __('Crea tu cuenta') }}
                        </h1>
                        <div>
                            <img class="rounded-lg w-full" src="{{ asset('assets/img/registrar.jpg') }}" alt="registrarse">
                        </div>
                    </div>
                    <div class="md:w-7/12">
                        <div class="">
                            <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST"
                                autocomplete="off">
                                @csrf
                                <div>
                                    <label for="name"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        {{ __('Nombre completo') }}
                                    </label>
                                    <input type="text" name="name" id="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg 
                                        focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700
                                         dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500
                                          dark:focus:border-blue-500 @error('name') border-red-500 @enderror"
                                        placeholder="{{ __('Nombre') }}" value={{ old('name') }}>
                                    @error('name')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="username"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        {{ __('Usuario') }}
                                    </label>
                                    <input type="text" name="username" id="username"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 @error('name') border-red-500 @enderror"
                                        placeholder="{{ __('Usuario') }}" value={{ old('username') }}>
                                    @error('username')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        {{ __('Correo electrónico') }}
                                    </label>
                                    <input type="email" name="email" id="email"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="name@company.com" value={{ old('email') }}>
                                    @error('email')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div class="relative">
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                                    <input type="password" name="password" id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                    <div class="absolute inset-y-0 right-3 top-7 flex items-center pl-3.5 cursor-pointer">
                                        <svg class="w-6 h-6 password-eye-show text-gray-800 dark:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 14" onclick="toggleEyes();return false;">
                                            <path
                                                d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                        </svg>
                                        <svg class="w-6 h-6 password-eye-hide text-gray-800 dark:text-white hidden"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 20 20" onclick="toggleEyes();return false;">
                                            <path
                                                d="m2 13.587 3.055-3.055A4.913 4.913 0 0 1 5 10a5.006 5.006 0 0 1 5-5c.178.008.356.026.532.054l1.744-1.744A8.973 8.973 0 0 0 10 3C4.612 3 0 8.336 0 10a6.49 6.49 0 0 0 2 3.587Z" />
                                            <path
                                                d="m12.7 8.714 6.007-6.007a1 1 0 1 0-1.414-1.414L11.286 7.3a2.98 2.98 0 0 0-.588-.21l-.035-.01a2.981 2.981 0 0 0-3.584 3.583c0 .012.008.022.01.033.05.204.12.401.211.59l-6.007 6.007a1 1 0 1 0 1.414 1.414L8.714 12.7c.189.091.386.162.59.211.011 0 .021.007.033.01a2.981 2.981 0 0 0 3.584-3.584c0-.012-.008-.023-.011-.035a3.05 3.05 0 0 0-.21-.588Z" />
                                            <path
                                                d="M17.821 6.593 14.964 9.45a4.952 4.952 0 0 1-5.514 5.514L7.665 16.75c.767.165 1.55.25 2.335.251 6.453 0 10-5.258 10-7 0-1.166-1.637-2.874-2.179-3.407Z" />
                                        </svg>
                                    </div>
                                    @error('password')
                                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="confirm-password"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                        password</label>
                                    <input type="password" name="password_confirmation" id="confirm-password"
                                        placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                </div>
                                <div class="flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="terms" aria-describedby="terms" type="checkbox" name="terms"
                                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                            required>
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="terms"
                                            class="font-light text-gray-500 dark:text-gray-300">{{ __('Acepto los') }}
                                            <a class="font-medium text-primary-600 hover:underline text-blue-700 dark:text-primary-500"
                                                href="#">{{ __('términos y condiciones') }}</a></label>
                                    </div>
                                </div>
                                @error('terms')
                                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2">
                                        {{ $message }}
                                    </p>
                                @enderror
                                <button type="submit"
                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    {{ __('Crear cuenta') }}
                                </button>
                                <p class="text-sm font-light text-gray-500 dark:text-gray-400 md:text-left text-center">
                                    {{ __('¿Ya tienes una cuenta?') }}
                                    <a href="#" class="font-medium text-blue-700 hover:underline dark:text-blue-500">
                                        {{ __('Inicia sesión') }}
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        let show = false;

        function toggleEyes() {

            const showEye = document.getElementsByClassName("password-eye-show");
            const hideEye = document.getElementsByClassName("password-eye-hide");

            if (showEye.length) { //deben de haber siempre el mismo número de ojos
                for (var i = 0; i < showEye.length; i++) {
                    showEye[i].classList.toggle('hidden');
                    hideEye[i].classList.toggle('hidden');
                }
                show = !show;

                const inputPass = document.getElementById("password");
                if (show) {
                    inputPass.type = 'text';
                } else {
                    inputPass.type = 'password';
                }
            }
        }
    </script>
@endsection
