<x-admin-layout>
    <h1 class="mb-6 text-3xl font-bold">Bookings</h1>

    <div class="overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900">
        <table class="min-w-full text-left text-sm">
            <thead class="border-b border-zinc-800 text-zinc-400">
                <tr>
                    <th class="px-4 py-3">Guest</th>
                    <th class="px-4 py-3">Hike</th>
                    <th class="px-4 py-3">Start Date</th>
                    <th class="px-4 py-3">PAX</th>
                    <th class="px-4 py-3">Contact</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($bookings as $booking)
                    <tr class="border-b border-zinc-800">
                        <td class="px-4 py-3">
                            <p>{{ $booking->name }}</p>
                            <p class="text-xs text-zinc-500">{{ $booking->email }}</p>
                        </td>
                        <td class="px-4 py-3 text-zinc-300">{{ $booking->hike }}</td>
                        <td class="px-4 py-3 text-zinc-300">{{ $booking->start_date ?? '-' }}</td>
                        <td class="px-4 py-3 text-zinc-300">{{ $booking->pax }}</td>
                        <td class="px-4 py-3 text-zinc-300">{{ $booking->phone }}</td>
                        <td class="px-4 py-3 text-right">
                            <form method="POST" action="{{ route('admin.bookings.destroy', $booking) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-400 hover:text-red-300">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-4 py-8 text-center text-zinc-400">No bookings submitted yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin-layout>
