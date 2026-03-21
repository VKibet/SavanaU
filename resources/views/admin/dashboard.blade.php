<x-admin-layout>
    <h1 class="mb-8 text-3xl font-bold text-white">Admin Dashboard</h1>

    <div class="mb-10 grid grid-cols-1 gap-6 md:grid-cols-3">
        <div class="rounded-2xl border border-zinc-800 bg-zinc-900 p-6">
            <p class="text-sm text-zinc-400">Total Hikes</p>
            <p class="mt-2 text-4xl font-bold text-emerald-400">{{ $hikesCount }}</p>
        </div>
        <div class="rounded-2xl border border-zinc-800 bg-zinc-900 p-6">
            <p class="text-sm text-zinc-400">Total Products</p>
            <p class="mt-2 text-4xl font-bold text-emerald-400">{{ $productsCount }}</p>
        </div>
        <div class="rounded-2xl border border-zinc-800 bg-zinc-900 p-6">
            <p class="text-sm text-zinc-400">Total Bookings</p>
            <p class="mt-2 text-4xl font-bold text-emerald-400">{{ $bookingsCount }}</p>
        </div>
    </div>

    <div class="rounded-2xl border border-zinc-800 bg-zinc-900 p-6">
        <h2 class="mb-4 text-xl font-semibold text-white">Recent Booking Requests</h2>
        @if($recentBookings->isEmpty())
            <p class="text-zinc-400">No booking requests yet.</p>
        @else
            <div class="space-y-3">
                @foreach($recentBookings as $booking)
                    <div class="flex items-center justify-between rounded-lg border border-zinc-800 bg-zinc-950 px-4 py-3">
                        <div>
                            <p class="font-medium">{{ $booking->name }}</p>
                            <p class="text-sm text-zinc-400">{{ $booking->hike }} - {{ $booking->phone }}</p>
                        </div>
                        <p class="text-xs text-zinc-500">{{ $booking->created_at->diffForHumans() }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</x-admin-layout>