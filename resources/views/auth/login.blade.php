<title>Prijava | e-Storitve</title>
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <img class="h-64 w-full object-cover object-center" src="https://cdn.discordapp.com/attachments/923643835073060886/1109214672764289185/estoritve.jpg" alt="e-Storitve" />
        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif



        <form method="POST" action="{{ route('login') }}" class="">
            @csrf

            <div >
                <x-jet-label for="email" value="{{ __('Uporabniško ime') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" placeholder="info@e-storitve.si" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Geslo') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="*******" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Zapomni si me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Ste pozabili prijavne podatke?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('PRIJAVA') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
