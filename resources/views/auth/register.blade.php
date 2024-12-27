<x-guest-layout>
    <x-authentication-card>
        <x-validation-errors class="mb-4" />
            
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
                
            <form method="POST" action="{{ route('register') }}">
                @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" style="width: 300px; height: 40px;" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1" type="email" name="email" :value="old('email')" required autocomplete="username" style="width: 300px; height: 40px;" />
            </div>

            <div>
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" style="width: 300px; height: 40px;" />
            </div>

            <div>
                <x-label for="address" value="{{ __('Address') }}" />
                <x-input id="address" class="block mt-1" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" style="width: 300px; height: 40px;" />
            
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1" type="password" name="password" required autocomplete="new-password" style="width: 300px; height: 40px;"/>
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1" type="password" name="password_confirmation" required autocomplete="new-password" style="width: 300px; height: 40px;"/>
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4 custom-login-btn">
                    {{ __('Register') }}
                </x-button>

            </div>
        </form>
    </div>
    </div>

     <!-- Bagian Gambar -->
     <div class="flex-1 flex justify-end items-center relative">
            <img src="{{ asset('images/burger.png') }}" alt="Additional Image" class="object-cover rounded-lg top-1/2" style="width: 400px; height: 400px; margin-top: -500px;">
        
        <!-- Bagian Gambar ayam -->
        <img src="{{ asset('images/Chicken.png') }}" alt="ayam Image" class="absolute object-cover rounded-lg top-1/2 right-[-10px] transform -translate-y-[-15px]" style="width: 180px; height: 110px; margin-top: -220px;">

        <!-- Bagian Gambar Bakso -->
        <img src="{{ asset('images/meatball.png') }}" alt="Bakso Image" class="absolute w-50 h-40 object-cover rounded-lg top-1/2 left-[430px] transform -translate-x-[50px] -translate-y-[5px]" style="margin-top: -210px;">
        </div>

    </x-authentication-card>
</x-guest-layout>
