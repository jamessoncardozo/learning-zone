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
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

<<<<<<< HEAD
        <x-validation-errors class="mb-4" />
=======
        <x-jet-validation-errors class="mb-4" />
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
<<<<<<< HEAD
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
=======
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Confirm') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
</x-guest-layout>
