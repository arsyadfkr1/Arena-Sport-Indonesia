@extends('layouts.admin')
@section('title', 'Tambah Produk')
@section('page-title', 'Tambah Produk Baru')
@section('page-subtitle', 'Isi form berikut untuk menambahkan produk ke katalog')

@section('content')
<div class="max-w-3xl">
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
        <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                {{-- Nama --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Produk <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name') }}"
                           class="w-full border {{ $errors->has('name') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all"
                           placeholder="Contoh: Ortuseight Catalyst Legion IN">
                    @error('name')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Kategori --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Kategori <span class="text-red-500">*</span></label>
                    <select name="category_id" class="w-full border {{ $errors->has('category_id') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id') == $cat->id ? 'selected' : '' }}>{{ $cat->icon }} {{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Brand --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Brand / Merek <span class="text-red-500">*</span></label>
                    <input type="text" name="brand" value="{{ old('brand') }}"
                           class="w-full border {{ $errors->has('brand') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all"
                           placeholder="Contoh: Nike, Adidas, Specs">
                    @error('brand')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Harga --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Harga (Rp) <span class="text-red-500">*</span></label>
                    <input type="number" name="price" value="{{ old('price') }}"
                           class="w-full border {{ $errors->has('price') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all"
                           placeholder="Contoh: 450000" min="1000">
                    @error('price')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Stok --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Stok <span class="text-red-500">*</span></label>
                    <input type="number" name="stock" value="{{ old('stock', 0) }}"
                           class="w-full border {{ $errors->has('stock') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all"
                           placeholder="Jumlah stok" min="0">
                    @error('stock')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Deskripsi --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi <span class="text-red-500">*</span></label>
                    <textarea name="description" rows="4"
                              class="w-full border {{ $errors->has('description') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all resize-none"
                              placeholder="Deskripsikan spesifikasi, bahan, ukuran, dan kegunaan produk...">{{ old('description') }}</textarea>
                    @error('description')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Foto Produk --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Foto Produk <span class="text-red-500">*</span></label>
                    <div class="border-2 border-dashed {{ $errors->has('image') ? 'border-red-400 bg-red-50' : 'border-slate-200 hover:border-brand/50' }} rounded-xl p-6 transition-all">
                        <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/webp"
                               class="hidden" onchange="previewImage(this)">
                        <label for="image" class="cursor-pointer flex flex-col items-center gap-3">
                            <div id="preview-container" class="hidden">
                                <img id="preview-img" class="w-40 h-40 object-cover rounded-xl mx-auto shadow" src="" alt="Preview">
                            </div>
                            <div id="upload-placeholder" class="text-center">
                                <div class="text-4xl mb-2">📸</div>
                                <p class="font-semibold text-slate-600 text-sm">Klik untuk upload foto</p>
                                <p class="text-slate-400 text-xs mt-1">JPG, PNG, atau WebP — Maks 2MB</p>
                            </div>
                        </label>
                    </div>
                    @error('image')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Featured --}}
                <div class="md:col-span-2">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured') ? 'checked' : '' }}
                               class="w-4 h-4 text-brand border-slate-300 rounded focus:ring-brand">
                        <span class="text-sm font-medium text-slate-700">Tandai sebagai Produk Unggulan (akan tampil di Beranda)</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center gap-3 pt-5 border-t border-slate-100">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl px-7 py-3 text-sm transition-all shadow-md shadow-blue-200">
                    💾 Simpan Produk
                </button>
                <a href="{{ route('admin.products.index') }}" class="bg-slate-100 hover:bg-slate-200 text-slate-600 font-semibold rounded-xl px-5 py-3 text-sm transition-all">Batal</a>
            </div>
        </form>
    </div>
</div>

@push('scripts')
<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('preview-img').src = e.target.result;
            document.getElementById('preview-container').classList.remove('hidden');
            document.getElementById('upload-placeholder').classList.add('hidden');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush
@endsection
