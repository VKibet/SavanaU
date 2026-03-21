<nav x-data="{ open: false }" class="fixed top-0 left-0 z-50 w-full border-b border-zinc-800 bg-black/70 text-white backdrop-blur-md">

    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-xl font-bold tracking-wide text-emerald-400">
            Savana Untold
        </a>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-8 text-sm uppercase tracking-wider">
            <a href="#hikes" class="transition hover:text-emerald-300">Hikes</a>
            <a href="#booking" class="transition hover:text-emerald-300">Book</a>
            <a href="#shop" class="transition hover:text-emerald-300">Shop</a>

            @auth
                <a href="{{ route('admin.dashboard') }}" class="rounded-full bg-emerald-400 px-4 py-2 text-xs text-black">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="rounded-full border border-white px-4 py-2 text-xs">
                    Login
                </a>
            @endauth
        </div>

        <!-- Mobile Button -->
        <button @click="open = true" class="md:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- MOBILE MENU -->
    <div x-show="open"
         x-transition
         class="fixed inset-0 flex flex-col items-center justify-center space-y-6 bg-black/95 text-xl text-white backdrop-blur-lg">

        <!-- Close Button -->
        <button @click="open = false" class="absolute top-6 right-6 text-2xl">
            ✕
        </button>

        <a href="#hikes" @click="open = false" class="hover:text-emerald-300">Hikes</a>
        <a href="#booking" @click="open = false" class="hover:text-emerald-300">Book</a>
        <a href="#shop" @click="open = false" class="hover:text-emerald-300">Shop</a>

        @auth
            <a href="{{ route('admin.dashboard') }}" class="rounded-full bg-emerald-400 px-6 py-2 text-sm text-black">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="border border-white px-6 py-2 rounded-full text-sm">
                Login
            </a>
        @endauth
    </div>

</nav>