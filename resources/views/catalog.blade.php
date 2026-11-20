@extends('layouts.app')

@section('title', 'Katalog Produk — Arena Sport Indonesia')

@section('content')
<div class="bg-navy py-10" style="background: linear-gradient(135deg, #07091A 0%, #0D1B3E 100%);">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="font-display text-3xl font-bold text-white mb-1">Katalog Produk</h1>
        <p class="text-slate-400 text-sm">Temukan perlengkapan sepak bola, futsal & minisoccer terbaik</p>
    </div>
</div>

<section class="py-10 bg-slate-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Filter Bar --}}
        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-4 mb-8">
            <form method="GET" action="{{ route('catalog.index') }}" class="flex flex-wrap gap-3 items-end">
                <div class="flex-1 min-w-48">
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Cari Produk</label>
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Nama produk atau brand..."
                        class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
                </div>
                <div class="min-w-44">
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Kategori</label>
                    <select name="category" class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
                        <option value="">Semua Kategori</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->slug }}" {{ $activeCategory == $cat->slug ? 'selected' : '' }}>{{ $cat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="min-w-40">
                    <label class="block text-xs font-semibold text-slate-500 uppercase tracking-wider mb-1.5">Urutkan</label>
                    <select name="sort" class="w-full border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
                        <option value="latest" {{ request('sort','latest')=='latest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="price_asc" {{ request('sort')=='price_asc' ? 'selected' : '' }}>Harga Terendah</option>
                        <option value="price_desc" {{ request('sort')=='price_desc' ? 'selected' : '' }}>Harga Tertinggi</option>
                        <option value="name" {{ request('sort')=='name' ? 'selected' : '' }}>Nama A-Z</option>
                    </select>
                </div>
                <div class="flex gap-2">
                    <button type="submit" class="btn-primary text-white font-semibold rounded-xl px-5 py-2.5 text-sm shadow-md">
                        Cari
                    </button>
                    @if(request()->hasAny(['search','category','sort']))
                    <a href="{{ route('catalog.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold rounded-xl px-4 py-2.5 text-sm transition-all">Reset</a>
                    @endif
                </div>
            </form>
        </div>

        {{-- Ultra-Premium Category Chips --}}
        <div class="mb-8">
            <div class="flex items-center gap-2">
                <button onclick="document.getElementById('cat-slider-catalog').scrollBy({left: -240, behavior: 'smooth'})"
                        type="button" title="Geser Kiri"
                        class="hidden md:flex w-9 h-9 rounded-full bg-white hover:bg-blue-50 border border-slate-200 hover:border-blue-300 shadow-xs items-center justify-center text-slate-500 hover:text-blue-600 transition-all flex-shrink-0 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                </button>

                <div id="cat-slider-catalog" class="flex items-center gap-3 overflow-x-auto no-scrollbar scroll-smooth py-1 w-full">
                    
                    {{-- All Chip --}}
                    @php $isAllActive = empty($activeCategory); @endphp
                    <a href="{{ route('catalog.index', request()->except('category')) }}"
                       class="group flex-shrink-0 inline-flex items-center gap-2.5 px-4 py-2.5 rounded-2xl text-xs sm:text-sm font-bold transition-all duration-300 cat-chip {{ $isAllActive ? 'bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 text-white shadow-md shadow-blue-500/25 ring-2 ring-blue-500/30' : 'bg-white text-slate-700 border border-slate-200/90 shadow-xs hover:border-blue-400 hover:bg-blue-50/40' }}">
                        <span class="w-7 h-7 rounded-xl {{ $isAllActive ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-600' }} flex items-center justify-center text-sm shadow-inner group-hover:scale-110 group-hover:rotate-6 transition-transform">
                            🔥
                        </span>
                        <span>Semua Produk</span>
                        <span class="{{ $isAllActive ? 'bg-white/20 text-white' : 'bg-slate-100 text-slate-500' }} text-[10px] font-extrabold px-2 py-0.5 rounded-full ml-0.5">
                            {{ \App\Models\Product::count() }}
                        </span>
                    </a>

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
                        $isActive = ($activeCategory === $cat->slug);
                        $style = $chipColors[$cat->slug] ?? ['badge' => 'bg-slate-100 text-slate-700 border-slate-200', 'hover' => 'hover:border-blue-400 hover:bg-blue-50/40', 'icon' => '⚽'];
                    @endphp
                    <a href="{{ route('catalog.index', ['category' => $cat->slug] + request()->except('category')) }}"
                       class="group flex-shrink-0 inline-flex items-center gap-2.5 px-4 py-2.5 rounded-2xl text-xs sm:text-sm font-semibold transition-all duration-300 cat-chip {{ $isActive ? 'bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 text-white shadow-md shadow-blue-500/25 ring-2 ring-blue-500/30 font-bold' : 'bg-white text-slate-700 border border-slate-200/90 shadow-xs hover:shadow-md ' . $style['hover'] }}">
                        <span class="w-7 h-7 rounded-xl {{ $isActive ? 'bg-white/20 text-white border-transparent' : $style['badge'] . ' border' }} flex items-center justify-center text-sm shadow-xs group-hover:scale-115 group-hover:rotate-6 transition-all duration-300">
                            {{ $cat->icon ?: $style['icon'] }}
                        </span>
                        <span class="{{ $isActive ? 'text-white' : 'group-hover:text-blue-700' }} transition-colors font-medium">
                            {{ $cat->name }}
                        </span>
                        <span class="{{ $isActive ? 'bg-white/20 text-white' : 'bg-slate-100 group-hover:bg-blue-100 text-slate-500 group-hover:text-blue-700' }} text-[10px] font-bold px-2 py-0.5 rounded-full transition-colors ml-0.5">
                            {{ $cat->products_count }}
                        </span>
                    </a>
                    @endforeach
                </div>

                <button onclick="document.getElementById('cat-slider-catalog').scrollBy({left: 240, behavior: 'smooth'})"
                        type="button" title="Geser Kanan"
                        class="hidden md:flex w-9 h-9 rounded-full bg-white hover:bg-blue-50 border border-slate-200 hover:border-blue-300 shadow-xs items-center justify-center text-slate-500 hover:text-blue-600 transition-all flex-shrink-0 cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        {{-- Results count --}}
        <p class="text-sm text-slate-500 mb-5">Menampilkan <span class="font-semibold text-slate-700">{{ $products->total() }}</span> produk</p>

        {{-- Product Grid --}}
        @if($products->count())
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-5">
            @foreach($products as $product)
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
                        @if($product->stock == 0)
                        <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                            <span class="bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">Stok Habis</span>
                        </div>
                        @endif
                        @if($product->is_featured)
                        <div class="absolute top-2.5 right-2.5">
                            <span class="bg-amber-400 text-amber-900 text-xs font-bold px-2 py-0.5 rounded-full shadow-sm">⭐ Unggulan</span>
                        </div>
                        @endif
                    </div>
                    <div class="p-4">
                        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">{{ $product->brand }}</p>
                        <h3 class="font-display font-semibold text-slate-800 text-sm leading-snug mb-3 line-clamp-2 min-h-10">{{ $product->name }}</h3>
                        <div class="flex items-center justify-between">
                            <span class="font-display font-bold text-brand text-base">{{ $product->formatted_price }}</span>
                            <span class="text-xs {{ $product->stock > 0 ? 'text-emerald-600 bg-emerald-50' : 'text-red-500 bg-red-50' }} font-medium px-2 py-0.5 rounded-full">
                                {{ $product->stock > 0 ? 'Ready '.$product->stock : 'Habis' }}
                            </span>
                        </div>
                    </div>
                </a>
                <div class="px-4 pb-4">
                    <a href="{{ route('catalog.show', $product->slug) }}" class="btn-primary block text-center text-white text-sm font-semibold rounded-xl py-2.5">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <div class="mt-10">
            {{ $products->links() }}
        </div>
        @else
        <div class="text-center py-24">
            <div class="text-6xl mb-4">🔍</div>
            <h3 class="font-display text-xl font-semibold text-slate-700 mb-2">Produk Tidak Ditemukan</h3>
            <p class="text-slate-400 mb-6">Coba ubah kata kunci pencarian atau pilih kategori lain.</p>
            <a href="{{ route('catalog.index') }}" class="btn-primary inline-block text-white font-semibold rounded-xl px-6 py-3 text-sm">Reset Pencarian</a>
        </div>
        @endif
    </div>
</section>
@endsection
