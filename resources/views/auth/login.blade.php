<x-guest-layout title="Login">
    <div class="flex items-center min-h-screen p-6 bg-azul-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden" src="{{ asset('img/login-office.jpg') }}" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block" src="{{ asset('img/login-office-dark.jpeg')}}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <img class="mx-auto mb-8" width="200px" alt="{{ config('app.name') }}" src="{{ asset('img/logo_azul.svg') }}" />
                        {{-- <h1 class="mb-4 text-xl font-semibold text-azul-900 dark:text-gray-200">
                            Login
                        </h1> --}}
                        @if ($errors->any())
                        <div class="mb-4">
                            <div class="font-medium font-bold text-ruby-900">Opa! alguma coisa está errada.</div>

                            <ul class="mt-3 text-sm text-ruby-900 list-disc list-inside">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if (session('status'))
                        <div class="mb-4 text-sm font-medium text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <label class="block text-sm">
                                <span class="text-azul-900 dark:text-gray-400">E-mail</span>
                                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-azul-400 focus:outline-none focus:shadow-outline-white dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" name="email" value="{{ old('email') }}" required autofocus />
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-azul-900 dark:text-gray-400">Senha</span>
                                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-azul-400 focus:outline-none focus:shadow-outline-white dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="" type="password" name="password" required autocomplete="current-password" />
                            </label>
                            <label class="block mt-4 text-sm">
                                <input type="checkbox" class="form-checkbox focus:border-azul-400 focus:outline-none focus:shadow-outline-white" name="remember"> <span class="ml-1 text-azul-900 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>
                            <!-- You should use a button here, as the anchor is only used for the example  -->
                            <button class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-azul-900 border border-transparent rounded-lg active:bg-azul-600 hover:bg-azul-800 focus:outline-none focus:shadow-outline-none" type="submit">
                                {{ __('Login') }}
                            </button>
                        </form>

                        {{-- <p class="mt-4">
                            <a class="text-sm font-medium text-azul-900 dark:text-purple-400 hover:underline" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>