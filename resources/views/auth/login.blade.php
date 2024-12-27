<x-guest-layout>
    <x-authentication-card>
        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-slot name="logo">
        </x-slot>


        <div class="flex justify-center mb-4">
            <a href="/">
                <img src="{{ asset('images/WhatsApp Image 2024-11-06 at 12.36.04_8744b446 (1).jpg') }}" alt="Logo" class="w-20 h-20">
            </a>
        </div>

            <!-- Tulisan "Kulineran" -->
            <div class="flex justify-center items-center">
            <h3 class="text-lg font-serif mb-5 text-black" style="font-size: 40px;">Kulineran</h3>
            </div>

            <div class="flex items-center gap-6">
            <div class="flex">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" style="width: 300px; height: 40px;" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1" type="password" name="password" required autocomplete="current-password" style="width: 300px; height: 40px;" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4 custom-login-btn">
                    {{ __('Log in') }}
                </x-button>

            </div>
        </form>
        </div>

         <!-- Bagian Gambar -->
         <div class="flex-1 flex justify-end items-center relative">
            <img src="{{ asset('images/burger.png') }}" alt="Additional Image" class="object-cover rounded-lg" style="width: 350px; height: 350px;">
        
        <!-- Bagian Gambar ayam -->
        <img src="{{ asset('images/Chicken.png') }}" alt="ayam Image" class="absolute object-cover rounded-lg top-1/2 right-[-10px] transform -translate-y-[-15px]" style="width: 170px; height: 110px;">

        <!-- Bagian Gambar Bakso -->
        <img src="{{ asset('images/meatball.png') }}" alt="Bakso Image" class="absolute w-40 h-40 object-cover rounded-lg top-1/2 left-[140px] transform -translate-x-[50px] -translate-y-[5px]">
        </div>
    </x-authentication-card>
</x-guest-layout>
