<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

<div class="flex min-h-screen">

    {{-- Sidebar --}}
    <aside class="w-64 bg-white shadow-md hidden md:block">
        <div class="p-6 text-xl font-bold text-indigo-600">
            BK Care
        </div>
        <nav class="px-4 space-y-2">
            <a href="#" class="block px-4 py-2 rounded hover:bg-indigo-100">Dashboard</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-indigo-100">Siswa</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-indigo-100">Konseling</a>
            <a href="#" class="block px-4 py-2 rounded hover:bg-indigo-100">Logout</a>
        </nav>
    </aside>

    {{-- Main --}}
    <div class="flex-1">
        {{-- Header --}}
        <header class="bg-white shadow px-6 py-4 flex justify-between items-center">
            <h1 class="font-semibold text-lg">@yield('title')</h1>
            <div class="flex items-center gap-3">
                <span class="text-sm">Halo 👋</span>
                <img src="https://i.pravatar.cc/40" class="rounded-full">
            </div>
        </header>

        {{-- Content --}}
        <main class="p-6">
            @yield('content')
        </main>
    </div>

</div>

</body>
</html>
