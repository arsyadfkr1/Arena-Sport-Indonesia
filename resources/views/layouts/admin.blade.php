<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel') — Arena Sport Indonesia</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: { extend: {
                colors: { navy: '#07091A', brand: { DEFAULT:'#1D4ED8', light:'#3B82F6' } },
                fontFamily: { sans: ['Inter','sans-serif'], display: ['Poppins','sans-serif'] }
            }}
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1,h2,h3,.font-display { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-slate-100">
<div class="flex min-h-screen">
    {{-- Sidebar --}}
    <aside class="w-60 bg-[#07091A] text-white flex flex-col fixed h-full z-40">
        <div class="p-5 border-b border-white/10">
            <div class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Arena Sport" class="w-10 h-10 object-contain drop-shadow-lg">
                <div>
                    <div class="font-display font-bold text-sm leading-tight">ARENA SPORT</div>
                    <div class="text-blue-400 text-xs font-medium">Admin Panel</div>
                </div>
            </div>
        </div>
        <nav class="flex-1 p-4 space-y-1">
            <a href="{{ route('admin.products.index') }}" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium transition-all {{ request()->routeIs('admin.products.*') ? 'bg-blue-600 text-white' : 'text-slate-400 hover:text-white hover:bg-white/10' }}">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                Kelola Produk
            </a>
        </nav>
        <div class="p-4 border-t border-white/10">
            <a href="{{ route('home') }}" class="flex items-center gap-2 text-slate-400 hover:text-white text-sm transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/></svg>
                Kembali ke Website
            </a>
        </div>
    </aside>

    {{-- Main --}}
    <div class="flex-1 ml-60">
        <header class="bg-white border-b border-slate-200 px-8 py-4 flex items-center justify-between sticky top-0 z-30 shadow-sm">
            <div>
                <h1 class="font-display font-bold text-slate-800 text-lg">@yield('page-title', 'Dashboard')</h1>
                <p class="text-slate-400 text-xs">@yield('page-subtitle', 'PT Arena Sport Indonesia')</p>
            </div>
            <a href="{{ route('admin.products.create') }}" class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold rounded-xl px-4 py-2 transition-all shadow">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                Tambah Produk
            </a>
        </header>

        <main class="p-8">
            @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-xl px-5 py-3.5 mb-6 flex items-center gap-3 text-sm">
                <svg class="w-5 h-5 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                {{ session('success') }}
            </div>
            @endif
            @yield('content')
        </main>
    </div>
</div>
@stack('scripts')
</body>
</html>
