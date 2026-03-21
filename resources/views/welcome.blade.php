<x-app-layout>

<!-- HERO -->
<section class="relative h-screen flex items-center justify-center text-white text-center">

    <!-- Background Image -->
    <div class="absolute inset-0">
        <img src="/images/hero.jpg" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/50"></div>
    </div>

    <!-- Content -->
    <div class="relative z-10 px-6 max-w-3xl">
        <p class="mb-4 text-sm uppercase tracking-widest text-emerald-300">
            Guided Adventures
        </p>

        <h1 class="text-5xl md:text-7xl font-bold leading-tight">
            Savana Untold
        </h1>

        <p class="mt-6 text-lg text-zinc-200">
            Modern hiking and safari experiences for curious explorers.
        </p>

        <div class="mt-8 flex gap-4 justify-center">
            <a href="#hikes" class="rounded-full bg-emerald-400 px-6 py-3 font-semibold text-black">
                View Trips
            </a>
            <a href="#booking" class="rounded-full border border-white px-6 py-3">
                Book Now
            </a>
        </div>
    </div>
</section>

<!-- FEATURED HIKE -->
<section id="hikes" class="bg-zinc-900 px-6 py-24">

    <div class="max-w-6xl mx-auto">

        <h2 class="mb-12 text-center text-3xl font-bold md:text-4xl">
            Upcoming Adventures
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            @foreach($hikes as $hike)
            <div class="overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-950 shadow-lg transition hover:-translate-y-1">

                <img src="{{ $hike->image ? asset('storage/' . $hike->image) : '/images/hike.jpg' }}" class="h-48 w-full object-cover">

                <div class="p-5">
                    <h3 class="text-xl font-semibold">{{ $hike->title }}</h3>

                    <p class="mt-1 text-sm text-zinc-400">
                        {{ $hike->location }}
                    </p>

                    <p class="mt-3 text-sm text-zinc-300">
                        {{ $hike->description }}
                    </p>

                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-emerald-300">
                            KES {{ $hike->price }}
                        </span>

                        <a href="#booking" class="rounded-full bg-emerald-400 px-4 py-2 text-sm font-medium text-black">
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
<section class="px-6 py-24">

    <div class="max-w-5xl mx-auto text-center">

        <h2 class="text-3xl md:text-4xl font-bold mb-6">
            Why Hike With Us
        </h2>

        <p class="mx-auto mb-12 max-w-2xl text-zinc-300">
            We curate safe, guided, and unforgettable outdoor experiences.
        </p>

        <div class="grid md:grid-cols-3 gap-10">

            <div>
                <h3 class="font-semibold text-lg mb-2">Expert Guides</h3>
                <p class="text-sm text-zinc-400">
                    Professional guides ensure safety and adventure.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-2">Premium Routes</h3>
                <p class="text-sm text-zinc-400">
                    Carefully selected scenic hiking trails.
                </p>
            </div>

            <div>
                <h3 class="font-semibold text-lg mb-2">Community</h3>
                <p class="text-sm text-zinc-400">
                    Meet like-minded adventure lovers.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- SHOP -->
<section id="shop" class="bg-zinc-900 px-6 py-24">

    <div class="max-w-6xl mx-auto">

        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
            Gear & Essentials
        </h2>

        <div class="grid md:grid-cols-4 gap-6">

            @foreach($products as $product)
            <div class="rounded-xl border border-zinc-800 bg-zinc-950 p-4 shadow transition hover:-translate-y-1">

                <img src="{{ $product->image ? asset('storage/' . $product->image) : '/images/product.jpg' }}" class="h-40 w-full rounded-lg object-cover">

                <h3 class="mt-3 font-semibold">{{ $product->name }}</h3>

                <p class="text-sm text-zinc-400">
                    KES {{ $product->price }}
                </p>

                <button class="mt-4 w-full rounded-lg bg-emerald-400 py-2 font-medium text-black">
                    Buy
                </button>

            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- BOOKING -->
<section id="booking" class="py-24 px-6">

    <div class="max-w-xl mx-auto text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold">
            Book Your Adventure
        </h2>
        <p class="mt-2 text-zinc-400">
            Fill in your details and we’ll get back to you.
        </p>
    </div>

    @if(session('success'))
        <div class="mx-auto mb-6 max-w-xl rounded-lg border border-emerald-500/40 bg-emerald-500/10 px-4 py-3 text-emerald-200">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('bookings.store') }}" class="mx-auto max-w-xl rounded-2xl border border-zinc-800 bg-zinc-900 p-8 shadow-lg">
        @csrf

        <input type="text" name="name" placeholder="Full Name" class="mb-4 w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
        <input type="email" name="email" placeholder="Email" class="mb-4 w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
        <input type="tel" name="phone" placeholder="Phone" class="mb-4 w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">

        <select name="hike" class="mb-4 w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <option value="">Select Hike</option>
            @foreach($hikes as $hike)
                <option value="{{ $hike->title }}">{{ $hike->title }}</option>
            @endforeach
        </select>

        <input type="date" name="start_date" class="mb-4 w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
        <input type="number" name="pax" min="1" value="1" class="mb-4 w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
        <textarea name="notes" placeholder="Notes" class="mb-4 w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3"></textarea>

        <button class="w-full rounded-lg bg-emerald-400 py-3 font-semibold text-black">
            Submit Booking
        </button>

    </form>
</section>

</x-app-layout>
