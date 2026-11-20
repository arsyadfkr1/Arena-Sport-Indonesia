@extends('layouts.admin')

@section('title', 'Kelola Produk')
@section('page-title', 'Kelola Produk')
@section('page-subtitle', 'Daftar semua produk yang tersedia di toko')

@section('content')

{{-- Stats --}}
<div class="grid grid-cols-2 md:grid-cols-4 gap-5 mb-8">
    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">Total Produk</p>
        <p class="font-display font-black text-3xl text-slate-800">{{ \App\Models\Product::count() }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">Kategori</p>
        <p class="font-display font-black text-3xl text-slate-800">{{ \App\Models\Category::count() }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">Produk Unggulan</p>
        <p class="font-display font-black text-3xl text-brand">{{ \App\Models\Product::where('is_featured',true)->count() }}</p>
    </div>
    <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-sm">
        <p class="text-slate-400 text-xs font-semibold uppercase tracking-wider mb-1">Stok Habis</p>
        <p class="font-display font-black text-3xl text-red-500">{{ \App\Models\Product::where('stock',0)->count() }}</p>
    </div>
</div>

{{-- Filter --}}
<div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-5 mb-6">
    <form method="GET" action="{{ route('admin.products.index') }}" class="flex flex-wrap gap-3">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama produk..."
               class="flex-1 min-w-48 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
        <select name="category_id" class="border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
            <option value="">Semua Kategori</option>
            @foreach($categories as $cat)
            <option value="{{ $cat->id }}" {{ request('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl px-5 py-2.5 text-sm transition-all">Filter</button>
        @if(request()->hasAny(['search','category_id']))
        <a href="{{ route('admin.products.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold rounded-xl px-4 py-2.5 text-sm transition-all">Reset</a>
        @endif
    </form>
</div>

{{-- Table --}}
<div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-slate-100 bg-slate-50">
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-slate-500 uppercase tracking-wider">Produk</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-slate-500 uppercase tracking-wider">Kategori</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-slate-500 uppercase tracking-wider">Harga</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-slate-500 uppercase tracking-wider">Stok</th>
                    <th class="text-left px-5 py-3.5 text-xs font-semibold text-slate-500 uppercase tracking-wider">Status</th>
                    <th class="text-right px-5 py-3.5 text-xs font-semibold text-slate-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @forelse($products as $product)
                <tr class="hover:bg-slate-50/50 transition-colors">
                    <td class="px-5 py-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl overflow-hidden bg-white border border-slate-200 flex-shrink-0 flex items-center justify-center p-1">
                                @if($product->image && file_exists(public_path('storage/'.$product->image)))
                                    <img src="{{ asset('storage/'.$product->image) }}" class="w-full h-full object-contain" alt="">
                                @else
                                    <div class="w-full h-full flex items-center justify-center text-xl">{{ $product->category->icon ?? '⚽' }}</div>
                                @endif
                            </div>
                            <div>
                                <p class="font-semibold text-slate-800 text-sm">{{ Str::limit($product->name, 35) }}</p>
                                <p class="text-slate-400 text-xs">{{ $product->brand }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="px-5 py-4">
                        <span class="bg-blue-50 text-blue-700 text-xs font-semibold px-2.5 py-1 rounded-full">{{ $product->category->name }}</span>
                    </td>
                    <td class="px-5 py-4 font-semibold text-slate-700 text-sm">{{ $product->formatted_price }}</td>
                    <td class="px-5 py-4 text-sm text-slate-600">{{ $product->stock }} pcs</td>
                    <td class="px-5 py-4">
                        @if($product->is_featured)
                        <span class="bg-amber-50 text-amber-700 text-xs font-semibold px-2.5 py-1 rounded-full">⭐ Unggulan</span>
                        @else
                        <span class="bg-slate-100 text-slate-500 text-xs font-medium px-2.5 py-1 rounded-full">Reguler</span>
                        @endif
                    </td>
                    <td class="px-5 py-4">
                        <div class="flex items-center justify-end gap-2">
                            <a href="{{ route('admin.products.edit', $product) }}" class="bg-blue-50 hover:bg-blue-100 text-blue-700 text-xs font-semibold px-3 py-1.5 rounded-lg transition-all">Edit</a>
                            <form method="POST" action="{{ route('admin.products.destroy', $product) }}"
                                  onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf @method('DELETE')
                                <button class="bg-red-50 hover:bg-red-100 text-red-600 text-xs font-semibold px-3 py-1.5 rounded-lg transition-all">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr><td colspan="6" class="text-center py-16 text-slate-400">Belum ada produk. <a href="{{ route('admin.products.create') }}" class="text-brand font-semibold">Tambah sekarang</a></td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($products->hasPages())
    <div class="p-5 border-t border-slate-100">{{ $products->links() }}</div>
    @endif
</div>
@endsection
