<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::withCount('products')->get();
        $query      = Product::with('category');

        if ($request->filled('category')) {
            $query->whereHas('category', fn($q) => $q->where('slug', $request->category));
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('brand', 'like', '%' . $request->search . '%');
        }

        $sort = $request->get('sort', 'latest');
        match ($sort) {
            'price_asc'  => $query->orderBy('price', 'asc'),
            'price_desc' => $query->orderBy('price', 'desc'),
            'name'       => $query->orderBy('name', 'asc'),
            default      => $query->latest(),
        };

        $products = $query->paginate(12)->withQueryString();

        $activeCategory = $request->category;

        return view('catalog', compact('categories', 'products', 'activeCategory'));
    }

    public function show($slug)
    {
        $product  = Product::with('category')->where('slug', $slug)->firstOrFail();
        $related  = Product::with('category')
                        ->where('category_id', $product->category_id)
                        ->where('id', '!=', $product->id)
                        ->take(4)->get();

        return view('product-detail', compact('product', 'related'));
    }
}
