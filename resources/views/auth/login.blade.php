<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Korisničko ime -->
        <div>
            <x-input-label for="korisnicko_ime" :value="__('Korisničko ime')" />
            <x-text-input id="korisnicko_ime" class="block mt-1 w-full"
                          type="text"
                          name="korisnicko_ime"
                          :value="old('korisnicko_ime')"
                          required autofocus />
            <x-input-error :messages="$errors->get('korisnicko_ime')" class="mt-2" />
        </div>

        <!-- Lozinka -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Lozinka')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Zapamti me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Zapamti me') }}</span>
            </label>
        </div>

        <!-- Dugme za login i linkovi -->
        <div class="flex items-center justify-between mt-4">
            <div>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Zaboravili ste lozinku?') }}
                    </a>
                @endif
            </div>

            <div>
                <x-primary-button class="ms-3">
                    {{ __('Prijava') }}
                </x-primary-button>
            </div>
        </div>

        <!-- Link za registraciju novog člana -->
        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100">
                {{ __('Registruj se kao novi član') }}
            </a>
        </div>
    </form>
</x-guest-layout>
