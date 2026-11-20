<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Arena Sport Indonesia — Football Store')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: { DEFAULT: '#07091A', 800: '#0D1B3E', 700: '#1a2850' },
                        brand: { DEFAULT: '#1D4ED8', light: '#3B82F6', dark: '#1E3A8A' }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; }
        h1,h2,h3,h4,h5,h6,.font-display { font-family: 'Poppins', sans-serif; }
        .hero-bg {
            background: linear-gradient(135deg, #07091A 0%, #0D1B3E 50%, #1a2850 100%);
        }
        .card-hover { transition: transform 0.25s ease, box-shadow 0.25s ease; }
        .card-hover:hover { transform: translateY(-4px); box-shadow: 0 20px 40px rgba(29,78,216,0.15); }
        .btn-primary {
            background: linear-gradient(135deg, #1D4ED8, #2563EB);
            transition: all 0.2s ease;
        }
        .btn-primary:hover { background: linear-gradient(135deg, #1E3A8A, #1D4ED8); transform: translateY(-1px); }
        .nav-blur { backdrop-filter: blur(12px); background: rgba(7,9,26,0.92); }
        .text-gradient { background: linear-gradient(135deg, #60A5FA, #3B82F6); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .badge-category { font-size: 10px; font-weight: 700; letter-spacing: 0.08em; }
        .no-scrollbar::-webkit-scrollbar { display: none; height: 0; width: 0; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        .cat-chip { transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1); }
        .cat-chip:hover { transform: translateY(-3px); }
    </style>
    @stack('styles')
</head>
<body class="bg-slate-50 text-slate-800">

{{-- NAVBAR --}}
<nav class="nav-blur fixed top-0 left-0 right-0 z-50 border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-18 py-3">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <img src="{{ asset('images/logo.png') }}" alt="Arena Sport Indonesia" class="w-10 h-10 object-contain drop-shadow-lg">
                <div class="hidden sm:inline-flex items-center justify-center bg-blue-600 text-white text-[10px] font-extrabold px-1.5 py-0.5 rounded tracking-wider">
                    ASI
                </div>
                <div>
                    <div class="text-white font-display font-bold text-sm tracking-wide leading-tight">PT ARENA SPORT INDONESIA</div>
                    <div class="text-blue-400 text-[10px] leading-tight font-semibold tracking-widest uppercase">AUTHENTIC SPORTING GEAR</div>
                </div>
            </a>

            {{-- Desktop Menu --}}
            <div class="hidden md:flex items-center gap-1 bg-white/5 border border-white/10 rounded-xl p-1">
                <a href="{{ route('home') }}" class="text-xs sm:text-sm font-semibold transition-all px-3 py-1.5 rounded-lg {{ request()->routeIs('home') ? 'bg-blue-600 text-white shadow-md' : 'text-slate-300 hover:text-white' }}">Beranda</a>
                <a href="{{ route('catalog.index') }}" class="text-xs sm:text-sm font-semibold transition-all px-3 py-1.5 rounded-lg {{ request()->routeIs('catalog.*') ? 'bg-blue-600 text-white shadow-md' : 'text-slate-300 hover:text-white' }}">Katalog</a>
                <a href="{{ route('guide') }}" class="text-xs sm:text-sm font-semibold transition-all px-3 py-1.5 rounded-lg {{ request()->routeIs('guide') ? 'bg-blue-600 text-white shadow-md' : 'text-slate-300 hover:text-white' }}">Panduan Sol &amp; Ukuran</a>
                <a href="{{ route('about') }}" class="text-xs sm:text-sm font-semibold transition-all px-3 py-1.5 rounded-lg {{ request()->routeIs('about') ? 'bg-blue-600 text-white shadow-md' : 'text-slate-300 hover:text-white' }}">Tentang Kami</a>
            </div>

            {{-- Right CTA & Icons --}}
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.products.index') }}" class="flex items-center gap-1.5 text-xs font-semibold text-slate-200 hover:text-white bg-white/10 hover:bg-white/15 border border-white/20 rounded-xl px-3.5 py-2 transition-all">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span>Admin Panel</span>
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" class="hidden sm:inline-flex btn-primary text-white text-xs font-semibold rounded-xl px-4 py-2 shadow-lg">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</nav>

{{-- Main Content --}}
<main class="pt-16">
    @yield('content')
</main>

{{-- FOOTER --}}
<footer class="bg-navy text-white mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            {{-- Brand --}}
            <div class="lg:col-span-1">
                <div class="flex items-center gap-3 mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Arena Sport Indonesia" class="w-12 h-12 object-contain drop-shadow-xl">
                    <div>
                        <div class="font-display font-bold text-base leading-tight">PT ARENA SPORT</div>
                        <div class="text-blue-400 text-xs font-medium tracking-wider">INDONESIA</div>
                    </div>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed mb-5">
                    Pusat perlengkapan sepak bola, futsal, dan minisoccer terlengkap. Produk 100% original bergaransi.
                </p>
                <div class="flex items-start gap-2 text-sm text-slate-400">
                    <svg class="w-4 h-4 text-brand-light flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                    <span>Jl. ZA. Pagar Alam No. 88, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35145</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-slate-400 mt-2">
                    <svg class="w-4 h-4 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <span>Buka: <strong>Senin – Minggu (08.00 – 22.00 WIB)</strong></span>
                </div>
                <div class="flex items-center gap-2 text-sm text-slate-400 mt-2">
                    <svg class="w-4 h-4 text-brand-light flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 7V5z"/></svg>
                    +62 812-3456-7890 (CS Toko Lampung)
                </div>
            </div>

            {{-- Menu Cepat --}}
            <div>
                <h4 class="font-display font-semibold text-sm mb-4 uppercase tracking-wider text-slate-300">Menu Cepat</h4>
                <ul class="space-y-2.5">
                    @foreach([['Beranda','home'],['Katalog Produk','catalog.index'],['Panduan Sol & Ukuran','guide'],['Tentang Kami','about']] as [$label,$route])
                    <li><a href="{{ route($route) }}" class="text-slate-400 hover:text-white text-sm transition-colors">{{ $label }}</a></li>
                    @endforeach
                    <li><a href="{{ route('admin.products.index') }}" class="text-slate-400 hover:text-white text-sm transition-colors">Panel Admin</a></li>
                </ul>
            </div>

            {{-- Kategori Produk --}}
            <div>
                <h4 class="font-display font-semibold text-sm mb-4 uppercase tracking-wider text-slate-300">Kategori Produk</h4>
                <ul class="space-y-2.5">
                    @foreach(\App\Models\Category::take(6)->get() as $cat)
                    <li><a href="{{ route('catalog.index', ['category' => $cat->slug]) }}" class="text-slate-400 hover:text-white text-sm transition-colors">{{ $cat->name }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Mitra --}}
            <div>
                <h4 class="font-display font-semibold text-sm mb-4 uppercase tracking-wider text-slate-300">Mitra & Brand</h4>
                <div class="flex flex-wrap gap-2">
                    @foreach(['Nike','Adidas','Puma','Specs','Ortuseight','Molten','Hills','Calci'] as $brand)
                    <span class="bg-slate-800 text-slate-300 text-xs font-medium px-2.5 py-1 rounded-md">{{ $brand }}</span>
                    @endforeach
                </div>
                <div class="mt-5 pt-5 border-t border-slate-800">
                    <p class="text-slate-500 text-xs">© {{ date('Y') }} PT Arena Sport Indonesia. All rights reserved.</p>
                    <p class="text-slate-600 text-xs mt-1">Dibuat dengan ❤️ menggunakan Laravel {{ app()->version() }}</p>
                </div>
            </div>
        </div>
    </div>
</footer>

@stack('scripts')
</body>
</html>
