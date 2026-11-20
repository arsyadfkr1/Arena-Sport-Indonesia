@extends('layouts.app')

@section('title', $product->name . ' — Arena Sport Indonesia')

@section('content')
<div class="bg-slate-50 min-h-screen py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-6">
            <a href="{{ route('home') }}" class="hover:text-brand transition-colors">Beranda</a>
            <span>/</span>
            <a href="{{ route('catalog.index') }}" class="hover:text-brand transition-colors">Katalog</a>
            <span>/</span>
            <a href="{{ route('catalog.index', ['category' => $product->category->slug]) }}" class="hover:text-brand transition-colors">{{ $product->category->name }}</a>
            <span>/</span>
            <span class="text-slate-800 font-medium line-clamp-1">{{ $product->name }}</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 bg-white rounded-2xl shadow-sm border border-slate-100 p-8">
            {{-- Product Image --}}
            <div>
                <div class="bg-white rounded-2xl aspect-square overflow-hidden flex items-center justify-center p-6 border border-slate-100 shadow-sm">
                    @if($product->image && file_exists(public_path('storage/'.$product->image)))
                        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-contain hover:scale-105 transition-transform duration-300">
                    @else
                        <div class="flex flex-col items-center justify-center gap-4">
                            <span class="text-9xl">{{ $product->category->icon ?? '⚽' }}</span>
                            <p class="text-slate-400 text-sm">Foto akan segera tersedia</p>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Product Info --}}
            <div class="flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3 mb-3">
                        <span class="badge-category bg-brand text-white px-3 py-1.5 rounded-full uppercase tracking-wider">{{ $product->category->name }}</span>
                        @if($product->is_featured)
                        <span class="bg-amber-100 text-amber-700 text-xs font-bold px-3 py-1.5 rounded-full">⭐ Produk Unggulan</span>
                        @endif
                    </div>
                    <p class="text-slate-400 text-sm font-bold uppercase tracking-widest mb-2">{{ $product->brand }}</p>
                    <h1 class="font-display text-3xl font-bold text-slate-900 leading-snug mb-4">{{ $product->name }}</h1>

                    {{-- Price --}}
                    <div class="bg-slate-50 rounded-xl p-5 mb-6">
                        <p class="text-slate-500 text-sm mb-1">Harga</p>
                        <div class="font-display text-4xl font-black text-brand">{{ $product->formatted_price }}</div>
                    </div>

                    {{-- Stock status --}}
                    <div class="flex items-center gap-3 mb-6">
                        <div class="flex items-center gap-2">
                            <div class="w-2.5 h-2.5 rounded-full {{ $product->stock > 0 ? 'bg-emerald-500' : 'bg-red-500' }}"></div>
                            <span class="font-semibold text-sm {{ $product->stock > 0 ? 'text-emerald-700' : 'text-red-600' }}">
                                {{ $product->stock > 0 ? 'Stok Tersedia ('.$product->stock.' pcs)' : 'Stok Habis' }}
                            </span>
                        </div>
                    </div>

                    {{-- Description --}}
                    <div class="mb-6">
                        <h3 class="font-display font-semibold text-slate-800 mb-2">Deskripsi Produk</h3>
                        <p class="text-slate-600 leading-relaxed text-sm">{{ $product->description }}</p>
                    </div>
                </div>

                {{-- CTA Buttons --}}
                <div class="space-y-3">
                    @php
                        $waMsg = urlencode("Halo PT Arena Sport Indonesia, saya tertarik dengan produk:\n\n*{$product->name}*\nMerk: {$product->brand}\nHarga: {$product->formatted_price}\n\nApakah stok masih tersedia? Terima kasih 🙏");
                    @endphp
                    <a href="https://wa.me/6281234567890?text={{ $waMsg }}" target="_blank"
                       class="flex items-center justify-center gap-3 w-full bg-green-500 hover:bg-green-600 text-white font-display font-bold rounded-xl py-4 text-base transition-all shadow-lg shadow-green-200">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                        Pesan Sekarang via WhatsApp
                    </a>
                    <a href="{{ route('catalog.index', ['category' => $product->category->slug]) }}" class="block text-center w-full border border-slate-200 hover:border-brand hover:text-brand text-slate-600 font-semibold rounded-xl py-3 text-sm transition-all">
                        ← Lihat Produk Sejenis
                    </a>
                </div>
            </div>
        </div>

        {{-- Related Products --}}
        @if($related->count())
        <div class="mt-12">
            <h2 class="font-display text-2xl font-bold text-slate-900 mb-6">Produk Terkait</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                @foreach($related as $rel)
                <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100">
                    <a href="{{ route('catalog.show', $rel->slug) }}" class="block">
                        <div class="bg-white aspect-square overflow-hidden flex items-center justify-center p-3 border-b border-slate-100">
                            @if($rel->image && file_exists(public_path('storage/'.$rel->image)))
                                <img src="{{ asset('storage/'.$rel->image) }}" alt="{{ $rel->name }}" class="w-full h-full object-contain hover:scale-105 transition-transform duration-300">
                            @else
                                <span class="text-5xl">{{ $rel->category->icon ?? '⚽' }}</span>
                            @endif
                        </div>
                        <div class="p-4">
                            <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">{{ $rel->brand }}</p>
                            <h3 class="font-display font-semibold text-slate-800 text-sm line-clamp-2 mb-2">{{ $rel->name }}</h3>
                            <span class="font-display font-bold text-brand">{{ $rel->formatted_price }}</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        @endif

    </div>
</div>
@endsection
