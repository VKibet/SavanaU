<x-admin-layout>
    <div class="mx-auto max-w-3xl">
        <h1 class="mb-6 text-3xl font-bold">Edit Hike</h1>

        <form method="POST" action="{{ route('admin.hikes.update', $hike) }}" enctype="multipart/form-data" class="space-y-4 rounded-2xl border border-zinc-800 bg-zinc-900 p-6">
            @csrf
            @method('PUT')
            <input name="title" value="{{ old('title', $hike->title) }}" placeholder="Title" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <input name="location" value="{{ old('location', $hike->location) }}" placeholder="Location" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <input type="date" name="event_date" value="{{ old('event_date', $hike->event_date) }}" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <input name="difficulty" value="{{ old('difficulty', $hike->difficulty) }}" placeholder="Difficulty" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <input name="meeting_point" value="{{ old('meeting_point', $hike->meeting_point) }}" placeholder="Meeting point" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <input name="price" value="{{ old('price', $hike->price) }}" placeholder="Price" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <textarea name="description" placeholder="Description" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">{{ old('description', $hike->description) }}</textarea>
            <label class="flex items-center gap-2 text-sm text-zinc-300">
                <input type="checkbox" name="featured" value="1" @checked(old('featured', $hike->featured)) class="rounded border-zinc-600 bg-zinc-950">
                Featured hike
            </label>
            <input type="file" name="image" class="text-sm text-zinc-300">
            <button class="rounded-lg bg-emerald-500 px-5 py-2 font-medium text-black hover:bg-emerald-400">Update Hike</button>
        </form>
    </div>
</x-admin-layout>
