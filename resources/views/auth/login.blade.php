<x-guest-layout>
    <style>
        .login-btn {
            background-color: #FBB3C1;
            border-color: #FBB3C1;
            color: #1f2027;
        }
        .login-btn:hover {
            background-color: #f88399;
            color: #1f2027;
            transition: 2s all
        }

    </style>
    <div class="w-full row md:mx-8 sm:mx-2 my-4 p-4">
        <div class="col-md-6 col-sm-12">
            <div class="container">
                <div class="justify-center">
                    <div class="m-12 justify-center flex flex-col h-full">
                        <div class="my-12">
                            <h4 class="font-500" style="font-size:32px; font-family: 'T-Regular'; color: #1f2027;">
                                Welcome Back!</h4>
                        </div>
                        <x-jet-validation-errors class="mb-4" />

                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-input id="username" class="block mt-1 w-full" type="text" name="username"
                                    :value="old('username')" placeholder="Username" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" placeholder="Password" />
                            </div>

                            {{-- <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <x-jet-checkbox id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> --}}

                            {{-- <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-jet-button class="ml-4">
                        {{ __('Log in') }}
                    </x-jet-button>
                </div> --}}
                            <div class="my-4 row">
                                <div class="w-full">
                                    <button type="submit"
                                        style="border-radius: 1rem; font-weight:900;"
                                        class="login-btn py-2 w-full border-2">
                                        Login
                                    </button>
                                </div>
                            </div>

                            <p class="text-gray-400">Don&#039;t have an account? <a
                                    href="/register" class="text-gray-900">Register</a>
                            </p>

                            @if (Route::has('password.request'))
                                <p class="text-gray-400">Forgot Pasword?
                                    <a class=" text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Reset password?') }}
                                    </a>
                                </p>
                            @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 relative">
            <div
                style="width:100%; background-color: #F7F7FA; border-radius: 24px 0px 0px 24px; height: 751px; margin-left: 100px;">
            </div>
            <div class="front-img absolute" style="top: 110px">
                <img src="http://booking.luxetribes.com/images/background/back-8.jpeg" width="400"
                    style="border-radius: 24px" />
            </div>
            <div class="back-img absolute" style="top: 90px; left:450px">
                <img src="http://booking.luxetribes.com/images/background/back-7.png" alt=""
                    style="border-radius: 24px" />
            </div>
            <div class="back-img absolute" style="top: 450px; left:450px">
                <img src="http://booking.luxetribes.com/images/background/back-6.jpeg" width="180"
                    style="border-radius: 24px" />
            </div>
        </div>
    </div>

</x-guest-layout>
