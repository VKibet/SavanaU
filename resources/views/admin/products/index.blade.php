<x-admin-layout>
    <div class="mb-6 flex items-center justify-between">
        <h1 class="text-3xl font-bold">Products</h1>
        <a href="{{ route('admin.products.create') }}" class="rounded-lg bg-emerald-500 px-4 py-2 font-medium text-black hover:bg-emerald-400">
            Add Product
        </a>
    </div>

    <div class="overflow-hidden rounded-2xl border border-zinc-800 bg-zinc-900">
        <table class="min-w-full text-left text-sm">
            <thead class="border-b border-zinc-800 text-zinc-400">
                <tr>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Price</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3 text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr class="border-b border-zinc-800">
                        <td class="px-4 py-3">{{ $product->name }}</td>
                        <td class="px-4 py-3 text-zinc-300">KES {{ number_format($product->price, 2) }}</td>
                        <td class="px-4 py-3">
                            <span class="rounded-full px-2 py-1 text-xs {{ $product->active ? 'bg-emerald-500/20 text-emerald-300' : 'bg-zinc-700 text-zinc-300' }}">
                                {{ $product->active ? 'Active' : 'Inactive' }}
                            </span>
                        </td>
                        <td class="px-4 py-3 text-right">
                            <a href="{{ route('admin.products.edit', $product) }}" class="mr-4 text-emerald-400 hover:text-emerald-300">Edit</a>
                            <form method="POST" action="{{ route('admin.products.destroy', $product) }}" class="inline">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-400 hover:text-red-300">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-4 py-8 text-center text-zinc-400">No products added yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-admin-layout>
