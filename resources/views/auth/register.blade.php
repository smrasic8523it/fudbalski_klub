<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Ime -->
        <div>
            <x-input-label for="ime_kandidata" :value="__('Ime')" />
            <x-text-input id="ime_kandidata" class="block mt-1 w-full"
                          type="text"
                          name="ime_kandidata"
                          :value="old('ime_kandidata')"
                          required autofocus />
            <x-input-error :messages="$errors->get('ime_kandidata')" class="mt-2" />
        </div>

        <!-- Prezime -->
        <div class="mt-4">
            <x-input-label for="prezime_kandidata" :value="__('Prezime')" />
            <x-text-input id="prezime_kandidata" class="block mt-1 w-full"
                          type="text"
                          name="prezime_kandidata"
                          :value="old('prezime_kandidata')"
                          required />
            <x-input-error :messages="$errors->get('prezime_kandidata')" class="mt-2" />
        </div>

        <!-- Datum rođenja -->
        <div class="mt-4">
            <x-input-label for="datum_rodjenja" :value="__('Datum rođenja')" />
            <x-text-input id="datum_rodjenja" class="block mt-1 w-full"
                          type="date"
                          name="datum_rodjenja"
                          :value="old('datum_rodjenja')"
                          required />
            <x-input-error :messages="$errors->get('datum_rodjenja')" class="mt-2" />
        </div>

        <!-- Korisničko ime -->
        <div class="mt-4">
            <x-input-label for="korisnicko_ime" :value="__('Korisničko ime')" />
            <x-text-input id="korisnicko_ime" class="block mt-1 w-full"
                          type="text"
                          name="korisnicko_ime"
                          :value="old('korisnicko_ime')"
                          required />
            <x-input-error :messages="$errors->get('korisnicko_ime')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email_kandidata" :value="__('Email')" />
            <x-text-input id="email_kandidata" class="block mt-1 w-full"
                          type="email"
                          name="email_kandidata"
                          :value="old('email_kandidata')" />
            <x-input-error :messages="$errors->get('email_kandidata')" class="mt-2" />
        </div>

        <!-- Adresa -->
        <div class="mt-4">
            <x-input-label for="adresa" :value="__('Adresa')" />
            <x-text-input id="adresa" class="block mt-1 w-full"
                          type="text"
                          name="adresa"
                          :value="old('adresa')"
                          required />
            <x-input-error :messages="$errors->get('adresa')" class="mt-2" />
        </div>

        <!-- Telefon -->
        <div class="mt-4">
            <x-input-label for="telefons" :value="__('Telefon')" />
            <x-text-input id="telefons" class="block mt-1 w-full"
                          type="text"
                          name="telefons"
                          :value="old('telefons')" />
            <x-input-error :messages="$errors->get('telefons')" class="mt-2" />
        </div>

        <!-- Lozinka -->
        <div class="mt-4">
            <x-input-label for="lozinka" :value="__('Lozinka')" />
            <x-text-input id="lozinka" class="block mt-1 w-full"
                          type="password"
                          name="lozinka"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('lozinka')" class="mt-2" />
        </div>

        <!-- Potvrda lozinke -->
        <div class="mt-4">
            <x-input-label for="lozinka_confirmation" :value="__('Potvrdi lozinku')" />
            <x-text-input id="lozinka_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="lozinka_confirmation"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('lozinka_confirmation')" class="mt-2" />
        </div>

        <!-- Dugmad -->
        <div class="flex items-center justify-between mt-6">
            <!-- Dugme za registraciju -->
            <x-primary-button type="submit">
                {{ __('Potvrdi') }}
            </x-primary-button>

            <!-- Dugme za reset forme -->
            <x-secondary-button type="reset">
                {{ __('Resetuj') }}
            </x-secondary-button>

            <!-- Nazad na login -->
            <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900">
                {{ __('Nazad') }}
            </a>
        </div>
    </form>
</x-guest-layout>
