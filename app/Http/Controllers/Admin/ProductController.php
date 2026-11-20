<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::with('category');

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        $products   = $query->latest()->paginate(10)->withQueryString();
        $categories = Category::all();

        return view('admin.products.index', compact('products', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $messages = [
            'name.required'        => 'Nama produk wajib diisi.',
            'name.max'             => 'Nama produk maksimal 255 karakter.',
            'category_id.required' => 'Kategori produk wajib dipilih.',
            'brand.required'       => 'Brand / merek produk wajib diisi.',
            'brand.max'            => 'Brand / merek maksimal 100 karakter.',
            'price.required'       => 'Harga produk wajib diisi.',
            'price.numeric'        => 'Harga produk harus berupa angka (tipe data numerik).',
            'price.min'            => 'Harga produk minimal Rp 1.000.',
            'stock.required'       => 'Stok produk wajib diisi.',
            'stock.integer'        => 'Stok produk harus berupa bilangan bulat.',
            'stock.min'            => 'Stok produk tidak boleh negatif.',
            'description.required' => 'Deskripsi produk wajib diisi.',
            'description.min'      => 'Deskripsi produk minimal 10 karakter.',
            'image.required'       => 'Foto produk wajib diunggah.',
            'image.image'          => 'File yang diunggah harus berupa gambar.',
            'image.mimes'          => 'Format foto harus berupa JPG, JPEG, PNG, atau WebP.',
            'image.max'            => 'Ukuran foto produk maksimal 2MB (2048 KB).',
        ];

        $validated = $request->validate([
            'name'        => 'required|string|min:3|max:255',
            'category_id' => 'required|exists:categories,id',
            'brand'       => 'required|string|max:100',
            'price'       => 'required|numeric|min:1000',
            'stock'       => 'required|integer|min:0',
            'description' => 'required|string|min:10',
            'is_featured' => 'nullable|boolean',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ], $messages);

        $imagePath = $request->file('image')->store('products', 'public');

        Product::create([
            ...$validated,
            'slug'        => Str::slug($validated['name']),
            'image'       => $imagePath,
            'is_featured' => $request->boolean('is_featured'),
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil ditambahkan!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $messages = [
            'name.required'        => 'Nama produk wajib diisi.',
            'name.max'             => 'Nama produk maksimal 255 karakter.',
            'category_id.required' => 'Kategori produk wajib dipilih.',
            'brand.required'       => 'Brand / merek produk wajib diisi.',
            'brand.max'            => 'Brand / merek maksimal 100 karakter.',
            'price.required'       => 'Harga produk wajib diisi.',
            'price.numeric'        => 'Harga produk harus berupa angka (tipe data numerik).',
            'price.min'            => 'Harga produk minimal Rp 1.000.',
            'stock.required'       => 'Stok produk wajib diisi.',
            'stock.integer'        => 'Stok produk harus berupa bilangan bulat.',
            'stock.min'            => 'Stok produk tidak boleh negatif.',
            'description.required' => 'Deskripsi produk wajib diisi.',
            'description.min'      => 'Deskripsi produk minimal 10 karakter.',
            'image.image'          => 'File yang diunggah harus berupa gambar.',
            'image.mimes'          => 'Format foto harus berupa JPG, JPEG, PNG, atau WebP.',
            'image.max'            => 'Ukuran foto produk maksimal 2MB (2048 KB).',
        ];

        $validated = $request->validate([
            'name'        => 'required|string|min:3|max:255',
            'category_id' => 'required|exists:categories,id',
            'brand'       => 'required|string|max:100',
            'price'       => 'required|numeric|min:1000',
            'stock'       => 'required|integer|min:0',
            'description' => 'required|string|min:10',
            'is_featured' => 'nullable|boolean',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ], $messages);

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update([
            ...$validated,
            'slug'        => Str::slug($validated['name']),
            'is_featured' => $request->boolean('is_featured'),
        ]);

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil diperbarui!');
    }

    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();

        return redirect()->route('admin.products.index')
            ->with('success', 'Produk berhasil dihapus!');
    }
}
