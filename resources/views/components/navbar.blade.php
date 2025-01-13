<nav class="bg-orange-500" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="shrink-0">
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link href="/home" :active="request()->is('home')">Home</x-nav-link>
                        <x-nav-link href="/kuliner/all" :active="request()->is('kuliner')">Kuliner</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    </div>
                </div>
            </div>
            <div class="hidden md:block relative" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" 
                    class="text-white flex items-center hover:scale-110 hover:bg-transparent transition-transform duration-200 focus:outline-none">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 19a3.994 3.994 0 01-.623-1.155M20.243 9.757a9 9 0 11-12.727 0M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Account</span>
                </button>
                <div x-show="isOpen" 
                    @click.away="isOpen = false"
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                    <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" 
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                    </form>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen" 
                    class="relative inline-flex items-center justify-center rounded-md bg-white text-orange-500 hover:bg-orange-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-white" 
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="/home" class="block rounded-md px-3 py-2 text-base font-medium text-orange-500 bg-orange-100 hover:bg-orange-500 hover:text-white">Home</a>
            <a href="/kuliner/all" class="block rounded-md px-3 py-2 text-base font-medium text-orange-500 bg-orange-100 hover:bg-orange-500 hover:text-white">Kuliner</a>
            <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-orange-500 bg-orange-100 hover:bg-orange-500 hover:text-white">About</a>
            <div x-data="{ isAccountOpen: false }" class="relative">
                <button @click="isAccountOpen = !isAccountOpen" 
                    class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-orange-500 bg-orange-100 hover:bg-orange-500 hover:text-white">
                    Account
                </button>
                <div x-show="isAccountOpen" 
                    @click.away="isAccountOpen = false"
                    class="absolute z-10 mt-2 w-full origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black/5 focus:outline-none">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" 
                            class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>
