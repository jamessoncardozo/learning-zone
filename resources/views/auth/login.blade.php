<x-guest-layout>
<<<<<<< HEAD
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />
=======
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
<<<<<<< HEAD
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
=======
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
<<<<<<< HEAD
                    <x-checkbox id="remember_me" name="remember" />
=======
                    <x-jet-checkbox id="remember_me" name="remember" />
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
<<<<<<< HEAD
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
=======

              @if (Laravel\Fortify\Features::registration())
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                  {{ __("Don't have a account yet?") }}
                </a>
              @endif
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

<<<<<<< HEAD
                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
=======
                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
</x-guest-layout>
