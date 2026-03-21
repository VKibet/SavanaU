<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Savana Untold Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-zinc-950 text-white">

<div class="flex min-h-screen">

    <aside class="w-72 border-r border-zinc-800 bg-zinc-900 p-6">
        <a href="{{ route('admin.dashboard') }}" class="mb-8 block text-2xl font-bold tracking-wide text-emerald-400">Savana Untold</a>

        <nav class="space-y-2 text-sm">
            <a href="{{ route('admin.dashboard') }}" class="block rounded-lg px-4 py-3 hover:bg-zinc-800">Dashboard</a>
            <a href="{{ route('admin.hikes.index') }}" class="block rounded-lg px-4 py-3 hover:bg-zinc-800">Hikes</a>
            <a href="{{ route('admin.products.index') }}" class="block rounded-lg px-4 py-3 hover:bg-zinc-800">Products</a>
            <a href="{{ route('admin.bookings.index') }}" class="block rounded-lg px-4 py-3 hover:bg-zinc-800">Bookings</a>
        </nav>

        <form method="POST" action="{{ route('logout') }}" class="mt-10">
            @csrf
            <button class="w-full rounded-lg border border-emerald-500 px-4 py-2 text-left text-emerald-300 hover:bg-emerald-500/10">
                Logout
            </button>
        </form>
    </aside>

    <main class="flex-1 bg-zinc-950 p-8">
        @if(session('success'))
            <div class="mb-6 rounded-xl border border-emerald-500/40 bg-emerald-500/10 px-4 py-3 text-emerald-200">
                {{ session('success') }}
            </div>
        @endif
        {{ $slot }}
    </main>

</div>

</body>
</html>