@extends('layouts.app')

@section('title', 'PT Arena Sport Indonesia — Football Store Terlengkap')

@section('content')

{{-- ===== HERO SECTION ===== --}}
<section class="relative min-h-[92vh] flex items-center bg-[#07091A] overflow-hidden pt-8 pb-14">
    {{-- Background Image of Player --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-futsal.jpg') }}" alt="Futsal Action Background" 
             class="w-full h-full object-cover object-[78%_center] sm:object-right md:object-[82%_center] opacity-90 scale-105">
        {{-- High quality gradient blend matching design --}}
        <div class="absolute inset-0 bg-gradient-to-r from-[#07091A] via-[#07091A]/95 md:via-[#07091A]/80 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#07091A] via-transparent to-[#07091A]/50"></div>
    </div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 w-full">
        <div class="max-w-2xl lg:max-w-3xl">
            {{-- Tagline --}}
            <div class="inline-flex items-center gap-2 bg-blue-950/70 border border-blue-500/30 rounded-full px-3.5 py-1 text-xs text-blue-400 font-semibold mb-6 backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
                <span>OFFICIAL FOOTBALL &amp; FUTSAL STORE</span>
            </div>

            {{-- Main Title --}}
            <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-black text-white leading-[1.12] mb-6 tracking-tight">
                Perlengkapan Bola &amp; Futsal<br>
                Terbaik untuk <span class="text-blue-500">Performa</span><br>
                <span class="text-blue-500">Maksimal</span>
            </h1>

            {{-- Description --}}
            <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-8 max-w-xl font-normal">
                Dapatkan koleksi sepatu futsal, minisoccer, bola resmi standar FIFA, dan apparel original terlengkap dengan garansi 100% original di PT Arena Sport Indonesia.
            </p>

            {{-- Action Buttons --}}
            <div class="flex flex-wrap items-center gap-4 mb-12">
                <a href="{{ route('catalog.index') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-display font-semibold rounded-xl px-7 py-3.5 shadow-xl shadow-blue-600/30 text-sm transition-all hover:translate-y-[-2px]">
                    <span>Lihat Katalog</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20PT%20Arena%20Sport%20Indonesia%2C%20saya%20ingin%20konsultasi%20perlengkapan%20tim%20dan%20sparing" target="_blank"
                   class="inline-flex items-center gap-2 bg-white/10 hover:bg-white/15 border border-white/20 text-white font-medium rounded-xl px-6 py-3.5 text-sm transition-all backdrop-blur-md hover:border-white/40">
                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    <span>Konsultasi Tim &amp; Sparing</span>
                </a>
            </div>

            {{-- 3 Feature Cards --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-3.5 max-w-3xl">
                <div class="bg-slate-900/75 border border-white/10 backdrop-blur-md rounded-2xl p-4 flex items-center gap-3.5 shadow-lg">
                    <div class="w-10 h-10 rounded-xl bg-blue-600/20 border border-blue-500/30 flex items-center justify-center text-blue-400 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <div>
                        <div class="text-white font-bold text-xs sm:text-sm leading-tight">100% Original</div>
                        <div class="text-slate-400 text-[11px] mt-0.5">Distributor Resmi</div>
                    </div>
                </div>

                <div class="bg-slate-900/75 border border-white/10 backdrop-blur-md rounded-2xl p-4 flex items-center gap-3.5 shadow-lg">
                    <div class="w-10 h-10 rounded-xl bg-blue-600/20 border border-blue-500/30 flex items-center justify-center text-blue-400 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 01-1 1H9m4-1V8a1 1 0 011-1h2.586a1 1 0 01.707.293l3.414 3.414a1 1 0 01.293.707V16a1 1 0 01-1 1h-1m-6-1a1 1 0 001 1h1M5 17a2 2 0 104 0m-4 0a2 2 0 114 0m6 0a2 2 0 104 0m-4 0a2 2 0 114 0"/></svg>
                    </div>
                    <div>
                        <div class="text-white font-bold text-xs sm:text-sm leading-tight">Kirim Seluruh RI</div>
                        <div class="text-slate-400 text-[11px] mt-0.5">Pengiriman Cepat Aman</div>
                    </div>
                </div>

                <div class="bg-slate-900/75 border border-white/10 backdrop-blur-md rounded-2xl p-4 flex items-center gap-3.5 shadow-lg">
                    <div class="w-10 h-10 rounded-xl bg-blue-600/20 border border-blue-500/30 flex items-center justify-center text-blue-400 flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    </div>
                    <div>
                        <div class="text-white font-bold text-xs sm:text-sm leading-tight">Ready &amp; Custom</div>
                        <div class="text-slate-400 text-[11px] mt-0.5">Jersey Tim &amp; Perlengkapan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===== ULTRA-PREMIUM CATEGORY CARDS ===== --}}
<section class="bg-white/95 backdrop-blur-md border-b border-slate-200/80 sticky top-18 z-30 shadow-xs">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3.5">
        <div class="flex items-center gap-2">
            
            {{-- Left Scroll Arrow (Desktop) --}}
            <button onclick="document.getElementById('cat-slider').scrollBy({left: -240, behavior: 'smooth'})"
                    type="button" title="Geser Kiri"
                    class="hidden md:flex w-9 h-9 rounded-full bg-white hover:bg-blue-50 border border-slate-200 hover:border-blue-300 shadow-xs items-center justify-center text-slate-500 hover:text-blue-600 transition-all flex-shrink-0 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
            </button>

            {{-- Slider Container --}}
            <div id="cat-slider" class="flex items-center gap-3 overflow-x-auto no-scrollbar scroll-smooth py-1 w-full">
                
                {{-- All / Semua Chip --}}
                <a href="{{ route('catalog.index') }}" 
                   class="group flex-shrink-0 inline-flex items-center gap-2.5 px-4 py-2.5 rounded-2xl text-xs sm:text-sm font-bold transition-all duration-300 cat-chip bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 text-white shadow-md shadow-blue-500/25 ring-2 ring-blue-500/30">
                    <span class="w-7 h-7 rounded-xl bg-white/20 flex items-center justify-center text-sm shadow-inner group-hover:scale-110 group-hover:rotate-6 transition-transform">
                        🔥
                    </span>
                    <span>Semua Produk</span>
                    <span class="bg-white/20 text-white text-[10px] font-extrabold px-2 py-0.5 rounded-full ml-0.5">
                        {{ \App\Models\Product::count() }}
                    </span>
                </a>

                {{-- Category Chips --}}
                @php
                    $chipColors = [
                        'sepatu-futsal'        => ['badge' => 'bg-cyan-100 text-cyan-700 border-cyan-200', 'hover' => 'hover:border-cyan-400 hover:bg-cyan-50/40', 'icon' => '👟'],
                        'sepatu-minisoccer'    => ['badge' => 'bg-emerald-100 text-emerald-700 border-emerald-200', 'hover' => 'hover:border-emerald-400 hover:bg-emerald-50/40', 'icon' => '⚡'],
                        'sepatu-sepak-bola'    => ['badge' => 'bg-blue-100 text-blue-700 border-blue-200', 'hover' => 'hover:border-blue-400 hover:bg-blue-50/40', 'icon' => '⚽'],
                        'bola'                 => ['badge' => 'bg-amber-100 text-amber-700 border-amber-200', 'hover' => 'hover:border-amber-400 hover:bg-amber-50/40', 'icon' => '🏆'],
                        'jersey-apparel'       => ['badge' => 'bg-indigo-100 text-indigo-700 border-indigo-200', 'hover' => 'hover:border-indigo-400 hover:bg-indigo-50/40', 'icon' => '👕'],
                        'perlengkapan-pemain'  => ['badge' => 'bg-purple-100 text-purple-700 border-purple-200', 'hover' => 'hover:border-purple-400 hover:bg-purple-50/40', 'icon' => '🧤'],
                        'perlengkapan-latihan' => ['badge' => 'bg-rose-100 text-rose-700 border-rose-200', 'hover' => 'hover:border-rose-400 hover:bg-rose-50/40', 'icon' => '🏃'],
                    ];
                @endphp

                @foreach($categories as $cat)
                @php
                    $style = $chipColors[$cat->slug] ?? ['badge' => 'bg-slate-100 text-slate-700 border-slate-200', 'hover' => 'hover:border-blue-400 hover:bg-blue-50/40', 'icon' => '⚽'];
                @endphp
                <a href="{{ route('catalog.index', ['category' => $cat->slug]) }}" 
                   class="group flex-shrink-0 inline-flex items-center gap-2.5 px-4 py-2.5 rounded-2xl text-xs sm:text-sm font-semibold transition-all duration-300 cat-chip bg-white text-slate-700 border border-slate-200/90 shadow-xs hover:shadow-md {{ $style['hover'] }}">
                    <span class="w-7 h-7 rounded-xl {{ $style['badge'] }} border flex items-center justify-center text-sm shadow-xs group-hover:scale-115 group-hover:rotate-6 transition-all duration-300">
                        {{ $cat->icon ?: $style['icon'] }}
                    </span>
                    <span class="group-hover:text-blue-700 transition-colors font-medium">
                        {{ $cat->name }}
                    </span>
                    <span class="bg-slate-100 group-hover:bg-blue-100 text-slate-500 group-hover:text-blue-700 text-[10px] font-bold px-2 py-0.5 rounded-full transition-colors ml-0.5">
                        {{ $cat->products_count }}
                    </span>
                </a>
                @endforeach
            </div>

            {{-- Right Scroll Arrow (Desktop) --}}
            <button onclick="document.getElementById('cat-slider').scrollBy({left: 240, behavior: 'smooth'})"
                    type="button" title="Geser Kanan"
                    class="hidden md:flex w-9 h-9 rounded-full bg-white hover:bg-blue-50 border border-slate-200 hover:border-blue-300 shadow-xs items-center justify-center text-slate-500 hover:text-blue-600 transition-all flex-shrink-0 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
            </button>
        </div>
    </div>
</section>

{{-- ===== CATALOG SECTION ===== --}}
<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-10">
            <div>
                <h2 class="font-display text-3xl font-bold text-slate-900">Katalog Perlengkapan Pilihan</h2>
                <p class="text-slate-500 mt-1">Temukan perlengkapan terbaik untuk performa optimal Anda</p>
            </div>
            <a href="{{ route('catalog.index') }}" class="text-brand font-semibold text-sm hover:text-brand-dark transition-colors hidden sm:block">
                Lihat Semua Produk →
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @forelse($featuredProds as $product)
            <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100">
                <a href="{{ route('catalog.show', $product->slug) }}" class="block">
                    <div class="relative bg-white aspect-square overflow-hidden flex items-center justify-center p-3 border-b border-slate-100">
                        @if($product->image && file_exists(public_path('storage/'.$product->image)))
                            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}"
                                 class="w-full h-full object-contain hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-100 to-slate-200">
                                <span class="text-5xl">{{ $product->category->icon ?? '⚽' }}</span>
                            </div>
                        @endif
                        <div class="absolute top-2.5 left-2.5">
                            <span class="badge-category bg-brand text-white px-2.5 py-1 rounded-full uppercase tracking-wider shadow-sm">
                                {{ $product->category->name }}
                            </span>
                        </div>
                        @if($product->stock == 0)
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center backdrop-blur-xs">
                            <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">Stok Habis</span>
                        </div>
                        @endif
                    </div>
                    <div class="p-4">
                        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">{{ $product->brand }}</p>
                        <h3 class="font-display font-semibold text-slate-800 text-sm leading-snug mb-3 line-clamp-2">{{ $product->name }}</h3>
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="font-display font-bold text-brand text-base">{{ $product->formatted_price }}</span>
                            </div>
                            <span class="text-xs {{ $product->stock > 0 ? 'text-emerald-600 bg-emerald-50' : 'text-red-500 bg-red-50' }} font-medium px-2 py-0.5 rounded-full">
                                {{ $product->stock > 0 ? 'Ready' : 'Habis' }}
                            </span>
                        </div>
                    </div>
                </a>
                <div class="px-4 pb-4">
                    <a href="{{ route('catalog.show', $product->slug) }}" class="btn-primary block text-center text-white text-sm font-semibold rounded-xl py-2.5">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-4 text-center py-20 text-slate-400">Belum ada produk unggulan.</div>
            @endforelse
        </div>

        {{-- Second row: Latest --}}
        @if($latestProds->count() > 0)
        <div class="mt-6 grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($latestProds->take(4) as $product)
            <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100">
                <a href="{{ route('catalog.show', $product->slug) }}" class="block">
                    <div class="relative bg-white aspect-square overflow-hidden flex items-center justify-center p-3 border-b border-slate-100">
                        @if($product->image && file_exists(public_path('storage/'.$product->image)))
                            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-contain hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-slate-100 to-slate-200">
                                <span class="text-5xl">{{ $product->category->icon ?? '⚽' }}</span>
                            </div>
                        @endif
                        <div class="absolute top-2.5 left-2.5">
                            <span class="badge-category bg-brand text-white px-2.5 py-1 rounded-full uppercase tracking-wider shadow-sm">{{ $product->category->name }}</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">{{ $product->brand }}</p>
                        <h3 class="font-display font-semibold text-slate-800 text-sm leading-snug mb-3 line-clamp-2">{{ $product->name }}</h3>
                        <span class="font-display font-bold text-brand text-base">{{ $product->formatted_price }}</span>
                    </div>
                </a>
                <div class="px-4 pb-4">
                    <a href="{{ route('catalog.show', $product->slug) }}" class="btn-primary block text-center text-white text-sm font-semibold rounded-xl py-2.5">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <div class="text-center mt-10">
            <a href="{{ route('catalog.index') }}" class="btn-primary inline-block text-white font-semibold rounded-xl px-10 py-3.5 shadow-lg shadow-brand/20">
                Muat Lebih Banyak Produk
            </a>
        </div>
    </div>
</section>

{{-- ===== ABOUT / DEDIKASI SECTION (MATCHING DESIGN) ===== --}}
<section class="py-20 bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            {{-- Left Column: Store Image + Floating Badge + 2 Stat Cards --}}
            <div class="lg:col-span-5">
                <div class="relative mb-8">
                    <div class="rounded-3xl overflow-hidden shadow-xl border border-slate-200 aspect-[4/3]">
                        <img src="{{ asset('images/store-warehouse.jpg') }}" alt="Gudang & Toko PT Arena Sport Indonesia"
                             class="w-full h-full object-cover">
                    </div>
                    {{-- Floating Badge --}}
                    <div class="absolute -bottom-5 left-4 right-4 bg-slate-900/90 backdrop-blur-md border border-white/20 rounded-2xl p-4 flex items-center justify-between text-white shadow-2xl">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white font-bold text-lg flex-shrink-0">
                                ⚽
                            </div>
                            <div>
                                <div class="font-bold text-xs sm:text-sm">Mitra Lebih Dari 150+ Klub</div>
                                <div class="text-slate-400 text-[11px]">Komunitas, Sekolah Sepak Bola &amp; Tim Liga</div>
                            </div>
                        </div>
                        <span class="text-blue-400 text-[11px] font-semibold uppercase tracking-wider hidden sm:inline">Terverifikasi</span>
                    </div>
                </div>

                {{-- 2 Stat Cards --}}
                <div class="grid grid-cols-2 gap-4 pt-4">
                    <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm">
                        <div class="font-display font-black text-3xl text-blue-600 mb-1">100%</div>
                        <div class="font-bold text-slate-800 text-sm">Jaminan Originalitas</div>
                        <div class="text-slate-400 text-xs mt-0.5">Produk bergaransi langsung dari distributor resmi</div>
                    </div>
                    <div class="bg-white rounded-2xl p-5 border border-slate-200 shadow-sm">
                        <div class="font-display font-black text-3xl text-blue-600 mb-1">48 Jam</div>
                        <div class="font-bold text-slate-800 text-sm">Layanan Ekspedisi Kilat</div>
                        <div class="text-slate-400 text-xs mt-0.5">Jaminan respon cepat dan garansi retur jika rusak</div>
                    </div>
                </div>
            </div>

            {{-- Right Column: Explanation, Pillars, Button --}}
            <div class="lg:col-span-7 lg:pl-6">
                <div class="inline-flex items-center gap-2 bg-blue-50 border border-blue-200 rounded-full px-3.5 py-1 text-xs text-blue-700 font-semibold mb-4">
                    <span>📌 TENTANG KAMI</span>
                </div>
                <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 leading-tight mb-5">
                    Dedikasi Terbaik untuk Komunitas<br>
                    <span class="text-blue-600">Sepak Bola &amp; Futsal Tanah Air</span>
                </h2>
                <p class="text-slate-600 leading-relaxed mb-4 text-sm sm:text-base">
                    Didirikan dengan semangat memajukan sepak bola dan futsal Indonesia, <strong>PT Arena Sport Indonesia</strong> adalah authorized distributor dan pusat retail terpercaya perlengkapan olahraga berkualitas tinggi.
                </p>
                <p class="text-slate-600 leading-relaxed mb-8 text-sm sm:text-base">
                    Kami bangga mendukung ratusan atlet grassroots, akademi pembinaan usia muda, dan atlet kompetitif dengan perlengkapan bersertifikasi standar FIFA — mulai dari sepatu boot spesialis permukaan lapangan lokal, bola bertekanan presisi, hingga pembuatan apparel jersey berteknologi tinggi.
                </p>

                {{-- Feature items --}}
                <div class="space-y-3.5 mb-8">
                    <div class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200/80 shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <div>
                            <div class="font-bold text-slate-800 text-sm">Distributor Resmi Merk Ternama</div>
                            <div class="text-slate-500 text-xs">Bekerja sama langsung dengan Specs, Ortuseight, Mills, Molten, Puma, Nike, &amp; Adidas.</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200/80 shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                        </div>
                        <div>
                            <div class="font-bold text-slate-800 text-sm">Garansi Uang Kembali 100%</div>
                            <div class="text-slate-500 text-xs">Jaminan keaslian serta kompensasi penuh jika produk terbukti tidak sesuai spesifikasi.</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3 bg-white p-3.5 rounded-xl border border-slate-200/80 shadow-xs">
                        <div class="w-8 h-8 rounded-lg bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <div>
                            <div class="font-bold text-slate-800 text-sm">Layanan Grosir &amp; Pembuatan Jersey Tim</div>
                            <div class="text-slate-500 text-xs">Paket apparel custom, rompi, dan bola untuk turnamen maupun sparing komunitas.</div>
                        </div>
                    </div>
                </div>

                {{-- Button --}}
                <a href="https://wa.me/6281234567890?text=Halo%20PT%20Arena%20Sport%20Indonesia%2C%20saya%20ingin%20berbicara%20dengan%20representatif%20resmi" target="_blank"
                   class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl px-7 py-3.5 text-sm transition-all shadow-lg shadow-blue-600/30">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    <span>Hubungi Representatif Kami</span>
                </a>
            </div>

        </div>
    </div>
</section>
    </div>
</section>

@endsection
