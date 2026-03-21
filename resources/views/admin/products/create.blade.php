<x-admin-layout>
    <div class="mx-auto max-w-3xl">
        <h1 class="mb-6 text-3xl font-bold">Create Product</h1>

        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data" class="space-y-4 rounded-2xl border border-zinc-800 bg-zinc-900 p-6">
            @csrf
            <input name="name" value="{{ old('name') }}" placeholder="Product name" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <input name="price" value="{{ old('price') }}" placeholder="Price" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">
            <textarea name="description" placeholder="Description" class="w-full rounded-lg border border-zinc-700 bg-zinc-950 p-3">{{ old('description') }}</textarea>
            <label class="flex items-center gap-2 text-sm text-zinc-300">
                <input type="checkbox" name="active" value="1" checked class="rounded border-zinc-600 bg-zinc-950">
                Active product
            </label>
            <input type="file" name="image" class="text-sm text-zinc-300">
            <button class="rounded-lg bg-emerald-500 px-5 py-2 font-medium text-black hover:bg-emerald-400">Save Product</button>
        </form>
    </div>
</x-admin-layout>
