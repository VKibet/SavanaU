<x-app-layout>

<!-- HERO -->
<section class="relative h-screen flex items-center justify-center text-white text-center overflow-hidden">

    <!-- Background Image with Gradient Overlay -->
    <div class="absolute inset-0">
        <img src="/images/hero.jpg" class="w-full h-full object-cover animate-[scale-105_20s_ease-in-out_infinite_alternate] transform transition-transform duration-1000">
        <!-- Deep rich overlay, fading from nature-950 to transparent back to black -->
        <div class="absolute inset-0 bg-gradient-to-b from-zinc-950/60 via-zinc-950/40 to-zinc-950"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 px-6 max-w-4xl animate-fade-in-up flex flex-col items-center">
        <span class="mb-6 inline-block rounded-full border border-nature-500/30 bg-nature-500/10 px-4 py-1.5 text-xs font-semibold tracking-widest text-nature-300 backdrop-blur-md">
            WILDERNESS AWAITS
        </span>

        <h1 class="text-5xl sm:text-6xl md:text-8xl font-display font-extrabold leading-tight tracking-tight text-transparent bg-clip-text bg-gradient-to-b from-white to-zinc-400 mb-6 drop-shadow-lg">
            Savana <span class="text-nature-400">Untold</span>
        </h1>

        <p class="mt-4 text-lg md:text-xl text-zinc-300 font-light max-w-2xl mx-auto leading-relaxed">
            Modern, guided hiking and safari experiences curated for curious explorers. Step outside the ordinary.
        </p>

        <div class="mt-10 flex flex-col sm:flex-row gap-4 sm:gap-6 justify-center w-full sm:w-auto px-4">
            <a href="#hikes" class="w-full sm:w-min whitespace-nowrap rounded-full bg-nature-500 px-8 py-4 font-semibold text-zinc-950 transition-all duration-300 hover:bg-nature-400 hover:shadow-glow hover:-translate-y-1">
                View Expeditions
            </a>
            <a href="#booking" class="w-full sm:w-min whitespace-nowrap rounded-full border border-zinc-500/50 bg-zinc-900/50 backdrop-blur-md px-8 py-4 font-medium transition-all duration-300 hover:bg-zinc-800 hover:border-zinc-400 hover:-translate-y-1">
                Book Now
            </a>
        </div>
    </div>
    
    <!-- Scroll indicator -->
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
        </svg>
    </div>
</section>

<!-- FEATURED HIKE -->
<section id="hikes" class="bg-zinc-950 px-6 py-24 md:py-32 relative">
    
    <!-- Subtle background accent -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-nature-900/30 rounded-full blur-3xl -z-10 mix-blend-screen overflow-hidden"></div>

    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16 md:mb-20">
            <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-4">
                Upcoming Adventures
            </h2>
            <p class="text-zinc-400 max-w-xl mx-auto text-lg">
                Join our next small-group expedition. Spots are limited to ensure a quality experience.
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8 md:gap-10">
            @foreach($hikes as $hike)
            <div class="group relative overflow-hidden rounded-3xl border border-zinc-800/50 bg-zinc-900/40 backdrop-blur-sm shadow-xl transition-all duration-500 hover:-translate-y-2 hover:shadow-glow hover:border-nature-500/30 flex flex-col h-full">

                <div class="aspect-w-16 aspect-h-12 w-full overflow-hidden relative">
                    <img src="{{ $hike->image ? asset('storage/' . $hike->image) : '/images/hike.jpg' }}" class="h-64 sm:h-56 w-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-zinc-900 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4">
                        <span class="rounded-full bg-zinc-900/80 backdrop-blur-md px-3 py-1 text-xs font-semibold text-nature-300 border border-zinc-700/50">
                            {{ $hike->location }}
                        </span>
                    </div>
                </div>

                <div class="p-6 flex-grow flex flex-col">
                    <h3 class="text-2xl font-display font-semibold transition-colors group-hover:text-nature-400">{{ $hike->title }}</h3>

                    <p class="mt-3 text-sm text-zinc-400 line-clamp-3 leading-relaxed flex-grow">
                        {{ $hike->description }}
                    </p>

                    <div class="mt-8 pt-4 border-t border-zinc-800/50 flex justify-between items-center bg-zinc-900/20 -mx-6 -mb-6 px-6 pb-6 pt-4 rounded-b-3xl">
                        <div class="flex flex-col">
                            <span class="text-xs text-zinc-500 uppercase tracking-wide">Price</span>
                            <span class="text-xl font-bold text-nature-400">
                                KES {{ number_format($hike->price) }}
                            </span>
                        </div>

                        <a href="#booking" class="rounded-full bg-nature-500/10 border border-nature-500/30 px-5 py-2 text-sm font-medium text-nature-400 transition-all hover:bg-nature-500 hover:text-zinc-950">
                            Book
                        </a>
                    </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- VALUE PROPOSITION -->
<section class="relative px-6 py-24 md:py-32 bg-zinc-900/20 border-y border-zinc-800/50 overflow-hidden">

    <div class="absolute left-10 top-10 text-nature-500/5 animate-float opacity-50">
        <svg width="200" height="200" viewBox="0 0 24 24" fill="currentColor"><path d="M14 11L9.5 5 5 11h9zm-4.5-9L2 13h15L9.5 2zM22 22H2v-2h20v2zm-2-5H4v-2h16v2z"/></svg>
    </div>

    <div class="max-w-6xl mx-auto relative z-10 text-center">

        <h2 class="text-4xl md:text-5xl font-display font-bold mb-6">
            Why Hike With Us
        </h2>

        <p class="mx-auto mb-16 md:mb-24 max-w-2xl text-zinc-400 text-lg">
            We handle the details so you can stay present on the trail.
        </p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 md:gap-16">

            <div class="flex flex-col items-center">
                <div class="h-16 w-16 rounded-full bg-nature-500/10 flex items-center justify-center text-nature-400 mb-6 border border-nature-500/20 shadow-glow">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                </div>
                <h3 class="font-display font-semibold text-xl mb-3">Expert Guides</h3>
                <p class="text-base text-zinc-400 max-w-xs text-center">
                    Professional, certified guides who know the routes, weather patterns, and nature.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div class="h-16 w-16 rounded-full bg-earth-500/10 flex items-center justify-center text-earth-400 mb-6 border border-earth-500/20 shadow-[0_0_15px_rgba(245,158,11,0.2)]">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="font-display font-semibold text-xl mb-3">Premium Routes</h3>
                <p class="text-base text-zinc-400 max-w-xs text-center">
                    Carefully selected, scenic hiking trails away from crowded tourist circuits.
                </p>
            </div>

            <div class="flex flex-col items-center">
                <div class="h-16 w-16 rounded-full bg-nature-500/10 flex items-center justify-center text-nature-400 mb-6 border border-nature-500/20 shadow-glow">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                </div>
                <h3 class="font-display font-semibold text-xl mb-3">Community</h3>
                <p class="text-base text-zinc-400 max-w-xs text-center">
                    Meet like-minded adventure lovers and form lasting bonds on the trail.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SHOP -->
<section id="shop" class="bg-zinc-950 px-6 py-24 md:py-32 relative">

    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-bold text-white mb-4">
                    Gear <span class="text-nature-400 opacity-80">&</span> Essentials
                </h2>
                <p class="text-zinc-400 max-w-lg text-lg">
                    Apparel and equipment designed for the outdoors.
                </p>
            </div>
            <a href="#" class="hidden md:inline-flex items-center text-nature-400 font-medium hover:text-nature-300 transition-colors">
                View All Gear
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            @foreach($products as $product)
            <div class="group relative rounded-2xl border border-zinc-800/60 bg-zinc-900/30 p-3 sm:p-5 shadow-lg transition-all duration-300 hover:-translate-y-1 hover:border-nature-500/40 hover:bg-zinc-900 flex flex-col h-full">

                <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-xl bg-zinc-800/50 mb-4 relative">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : '/images/product.jpg' }}" class="w-full h-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                </div>

                <h3 class="text-sm sm:text-base font-medium text-white mb-1 leading-snug">{{ $product->name }}</h3>

                <p class="text-sm font-semibold text-nature-400 mt-auto">
                    KES {{ number_format($product->price) }}
                </p>

                <button class="mt-4 w-full rounded-lg bg-zinc-800 border border-zinc-700/50 py-2.5 text-sm font-medium text-white transition-colors group-hover:bg-nature-500 group-hover:border-nature-400 group-hover:text-zinc-950">
                    Add to Cart
                </button>

            </div>
            @endforeach
        </div>
        
        <div class="mt-8 text-center md:hidden">
            <a href="#" class="inline-flex items-center rounded-full border border-zinc-700 bg-zinc-900 px-6 py-3 text-sm font-medium hover:bg-zinc-800">
                View All Gear
            </a>
        </div>
    </div>
</section>

<!-- BOOKING -->
<section id="booking" class="py-24 md:py-32 px-6 bg-zinc-900/50 relative">

    <!-- Decorative background elements -->
    <div class="absolute inset-0 bg-[url('/images/topo-pattern.svg')] opacity-[0.03] pointer-events-none"></div>

    <div class="max-w-2xl mx-auto relative z-10">
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-display font-bold mb-4">
                Reserve Your Spot
            </h2>
            <p class="text-lg text-zinc-400">
                Fill in your details below and our team will get back to you with an itinerary and payment link.
            </p>
        </div>

        @if(session('success'))
            <div class="mb-8 rounded-xl border border-nature-500/40 bg-nature-500/10 px-6 py-4 text-nature-300 flex items-center gap-3">
                <svg class="w-6 h-6 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <form method="POST" action="{{ route('bookings.store') }}" class="rounded-3xl border border-zinc-800/80 bg-zinc-950/80 backdrop-blur-xl p-6 sm:p-10 shadow-2xl relative overflow-hidden">
            @csrf
            
            <div class="absolute top-0 right-0 w-32 h-32 bg-nature-500/10 blur-3xl rounded-full"></div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5 relative z-10">
                <div>
                    <label class="block text-sm font-medium text-zinc-400 mb-1.5 ml-1">Full Name</label>
                    <input type="text" name="name" required class="w-full rounded-xl border border-zinc-700/50 bg-zinc-900/50 p-3.5 text-white placeholder-zinc-500 focus:border-nature-400 focus:ring-1 focus:ring-nature-400 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-medium text-zinc-400 mb-1.5 ml-1">Email Address</label>
                    <input type="email" name="email" required class="w-full rounded-xl border border-zinc-700/50 bg-zinc-900/50 p-3.5 text-white placeholder-zinc-500 focus:border-nature-400 focus:ring-1 focus:ring-nature-400 transition-colors">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5 relative z-10">
                <div>
                    <label class="block text-sm font-medium text-zinc-400 mb-1.5 ml-1">Phone Number</label>
                    <input type="tel" name="phone" required class="w-full rounded-xl border border-zinc-700/50 bg-zinc-900/50 p-3.5 text-white placeholder-zinc-500 focus:border-nature-400 focus:ring-1 focus:ring-nature-400 transition-colors">
                </div>
                <div>
                    <label class="block text-sm font-medium text-zinc-400 mb-1.5 ml-1">Travelers (Adults)</label>
                    <input type="number" name="pax" min="1" value="1" class="w-full rounded-xl border border-zinc-700/50 bg-zinc-900/50 p-3.5 text-white placeholder-zinc-500 focus:border-nature-400 focus:ring-1 focus:ring-nature-400 transition-colors">
                </div>
            </div>

            <div class="mb-5 relative z-10">
                <label class="block text-sm font-medium text-zinc-400 mb-1.5 ml-1">Select Hike / Experience</label>
                <select name="hike" required class="w-full rounded-xl border border-zinc-700/50 bg-zinc-900/50 p-3.5 text-white focus:border-nature-400 focus:ring-1 focus:ring-nature-400 transition-colors appearance-none">
                    <option value="">Choose an adventure...</option>
                    @foreach($hikes as $hike)
                        <option value="{{ $hike->title }}">{{ $hike->title }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-5 relative z-10">
                <label class="block text-sm font-medium text-zinc-400 mb-1.5 ml-1">Preferred Start Date</label>
                <input type="date" name="start_date" required class="w-full rounded-xl border border-zinc-700/50 bg-zinc-900/50 p-3.5 text-white placeholder-zinc-500 focus:border-nature-400 focus:ring-1 focus:ring-nature-400 transition-colors">
            </div>

            <div class="mb-8 relative z-10">
                <label class="block text-sm font-medium text-zinc-400 mb-1.5 ml-1">Additional Notes</label>
                <textarea name="notes" rows="3" placeholder="Dietary requirements, fitness concerns..." class="w-full rounded-xl border border-zinc-700/50 bg-zinc-900/50 p-3.5 text-white placeholder-zinc-500 focus:border-nature-400 focus:ring-1 focus:ring-nature-400 transition-colors resize-none"></textarea>
            </div>

            <button class="relative z-10 w-full rounded-xl bg-nature-500 py-4 font-semibold text-lg text-zinc-950 transition-all duration-300 hover:bg-nature-400 hover:shadow-glow transform hover:-translate-y-0.5">
                Request Booking
            </button>
            <p class="text-xs text-zinc-500 text-center mt-4 relative z-10">
                No payment is required until dates are confirmed.
            </p>

        </form>
    </div>
</section>

</x-app-layout>
