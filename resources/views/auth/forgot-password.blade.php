<x-guest-layout>
<<<<<<< HEAD
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
=======
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

<<<<<<< HEAD
        <x-validation-errors class="mb-4" />
=======
        <x-jet-validation-errors class="mb-4" />
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
<<<<<<< HEAD
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
=======
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
</x-guest-layout>
