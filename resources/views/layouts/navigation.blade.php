<nav x-data="{ open: false }" class="fixed top-0 left-0 z-50 w-full glass-nav transition-all duration-300">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-2xl font-display font-bold tracking-tight text-white group">
            Savana<span class="text-nature-400 group-hover:text-nature-300 transition-colors">Untold</span>
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-8 text-sm font-medium tracking-wide">
            <a href="#hikes" class="text-zinc-300 transition hover:text-nature-400 hover:-translate-y-0.5 inline-block duration-200">Hikes</a>
            <a href="#booking" class="text-zinc-300 transition hover:text-nature-400 hover:-translate-y-0.5 inline-block duration-200">Book</a>
            <a href="#shop" class="text-zinc-300 transition hover:text-nature-400 hover:-translate-y-0.5 inline-block duration-200">Shop</a>

            @auth
                <a href="{{ route('admin.dashboard') }}" class="rounded-full bg-nature-500 hover:bg-nature-400 hover:shadow-glow px-6 py-2.5 text-sm text-zinc-950 font-semibold transition-all duration-300 transform hover:-translate-y-0.5">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="rounded-full border border-zinc-600 bg-zinc-800/50 hover:bg-zinc-800 hover:border-zinc-400 px-6 py-2.5 text-sm font-medium transition-all duration-300">
                    Login
                </a>
            @endauth
        </div>

        <!-- Mobile Button -->
        <button @click="open = true" class="md:hidden text-zinc-200 hover:text-nature-400 transition-colors focus:outline-none p-2 -mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- MOBILE MENU FULLSCREEN OVERLAY -->
    <div x-show="open"
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
         class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-zinc-950/95 backdrop-blur-xl">

        <!-- Close Button -->
        <button @click="open = false" class="absolute top-6 right-6 p-4 text-zinc-400 hover:text-nature-400 transition-colors rounded-full bg-zinc-900/50 border border-zinc-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <div class="flex flex-col items-center space-y-8 w-full px-6">
            <a href="#hikes" @click="open = false" class="text-3xl font-display font-medium hover:text-nature-400 w-full text-center py-4 border-b border-zinc-800/50">Hikes</a>
            <a href="#booking" @click="open = false" class="text-3xl font-display font-medium hover:text-nature-400 w-full text-center py-4 border-b border-zinc-800/50">Book</a>
            <a href="#shop" @click="open = false" class="text-3xl font-display font-medium hover:text-nature-400 w-full text-center py-4 border-b border-zinc-800/50">Shop</a>

            <div class="pt-8 w-full flex flex-col gap-4 max-w-sm">
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="w-full text-center rounded-full bg-nature-500 px-6 py-4 text-lg font-semibold text-zinc-950 shadow-glow">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="w-full text-center rounded-full border border-zinc-700 bg-zinc-900 px-6 py-4 text-lg font-medium">
                        Login
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>