@extends('layouts.admin')
@section('title', 'Edit Produk')
@section('page-title', 'Edit Produk')
@section('page-subtitle', 'Perbarui informasi produk: ' . $product->name)

@section('content')
<div class="max-w-3xl">
    <div class="bg-white rounded-2xl border border-slate-100 shadow-sm p-8">
        <form method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">
            @csrf @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                {{-- Nama --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Nama Produk <span class="text-red-500">*</span></label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}"
                           class="w-full border {{ $errors->has('name') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
                    @error('name')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Kategori --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Kategori <span class="text-red-500">*</span></label>
                    <select name="category_id" class="w-full border {{ $errors->has('category_id') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
                        @foreach($categories as $cat)
                        <option value="{{ $cat->id }}" {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}>{{ $cat->icon }} {{ $cat->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Brand --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Brand / Merek <span class="text-red-500">*</span></label>
                    <input type="text" name="brand" value="{{ old('brand', $product->brand) }}"
                           class="w-full border {{ $errors->has('brand') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all">
                    @error('brand')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Harga --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Harga (Rp) <span class="text-red-500">*</span></label>
                    <input type="number" name="price" value="{{ old('price', $product->price) }}"
                           class="w-full border {{ $errors->has('price') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all" min="1000">
                    @error('price')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Stok --}}
                <div>
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Stok <span class="text-red-500">*</span></label>
                    <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"
                           class="w-full border {{ $errors->has('stock') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all" min="0">
                    @error('stock')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Deskripsi --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Deskripsi <span class="text-red-500">*</span></label>
                    <textarea name="description" rows="4"
                              class="w-full border {{ $errors->has('description') ? 'border-red-400 bg-red-50' : 'border-slate-200' }} rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-brand/40 focus:border-brand transition-all resize-none">{{ old('description', $product->description) }}</textarea>
                    @error('description')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Foto Produk --}}
                <div class="md:col-span-2">
                    <label class="block text-sm font-semibold text-slate-700 mb-2">Foto Produk <span class="text-slate-400 font-normal">(kosongkan jika tidak ingin mengubah)</span></label>
                    @if($product->image)
                    <div class="mb-3 flex items-center gap-4">
                        <img src="{{ asset('storage/'.$product->image) }}" class="w-24 h-24 rounded-xl object-cover shadow border border-slate-200" alt="Foto saat ini">
                        <div class="text-sm text-slate-500">
                            <p class="font-medium text-slate-700">Foto saat ini</p>
                            <p class="text-xs">Upload foto baru untuk mengganti</p>
                        </div>
                    </div>
                    @endif
                    <div class="border-2 border-dashed {{ $errors->has('image') ? 'border-red-400 bg-red-50' : 'border-slate-200 hover:border-brand/50' }} rounded-xl p-6 transition-all">
                        <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/webp" class="hidden" onchange="previewImage(this)">
                        <label for="image" class="cursor-pointer flex flex-col items-center gap-2 text-center">
                            <div id="preview-container" class="hidden"><img id="preview-img" class="w-40 h-40 object-cover rounded-xl mx-auto shadow" src="" alt="Preview"></div>
                            <div id="upload-placeholder">
                                <p class="text-3xl mb-1">📷</p>
                                <p class="text-slate-500 text-sm font-medium">Klik untuk upload foto baru</p>
                                <p class="text-slate-400 text-xs mt-1">JPG, PNG, WebP — Maks 2MB</p>
                            </div>
                        </label>
                    </div>
                    @error('image')<p class="text-red-500 text-xs mt-1.5">{{ $message }}</p>@enderror
                </div>

                {{-- Featured --}}
                <div class="md:col-span-2">
                    <label class="flex items-center gap-3 cursor-pointer">
                        <input type="checkbox" name="is_featured" value="1" {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}
                               class="w-4 h-4 text-brand border-slate-300 rounded focus:ring-brand">
                        <span class="text-sm font-medium text-slate-700">Tandai sebagai Produk Unggulan</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center gap-3 pt-5 border-t border-slate-100">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl px-7 py-3 text-sm transition-all shadow-md shadow-blue-200">
                    💾 Perbarui Produk
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
        reader.onload = e => {
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
