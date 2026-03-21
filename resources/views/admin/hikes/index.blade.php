<x-admin-layout>
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-3xl font-bold">Hikes</h1>
        <a href="{{ route('admin.hikes.create') }}" class="rounded-lg bg-emerald-500 px-4 py-2 font-medium text-black hover:bg-emerald-400">
            Add Hike
        </a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900">
        <table class="min-w-full text-left text-sm">
            <thead class="border-b border-zinc-800 text-zinc-400">
                <tr>
                    <th class="px-4 py-3">Title</th>
                    <th class="px-4 py-3">Location</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Price</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($hikes as $hike)
                    <tr class="border-b border-zinc-800">
                        <td class="px-4 py-3">{{ $hike->title }}</td>
                        <td class="px-4 py-3 text-zinc-300">{{ $hike->location }}</td>
                        <td class="px-4 py-3 text-zinc-300">{{ $hike->event_date }}</td>
                        <td class="px-4 py-3 text-zinc-300">KES {{ number_format($hike->price, 2) }}</td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.hikes.edit', $hike) }}" class="mr-4 text-emerald-400 hover:text-emerald-300">Edit</a>
                            <form method="POST" action="{{ route('admin.hikes.destroy', $hike) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-400 hover:text-red-300">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-8 text-center text-zinc-400">No hikes created yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin-layout>