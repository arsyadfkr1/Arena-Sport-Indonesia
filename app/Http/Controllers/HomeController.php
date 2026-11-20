<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories    = Category::withCount('products')->get();
        $featuredProds = Product::with('category')->where('is_featured', true)->take(8)->get();
        $latestProds   = Product::with('category')->latest()->take(8)->get();

        return view('home', compact('categories', 'featuredProds', 'latestProds'));
    }

    public function about()
    {
        return view('about');
    }

    public function guide()
    {
        $futsalShoes = Product::whereHas('category', fn($q) => $q->where('slug', 'sepatu-futsal'))->take(3)->get();
        $turfShoes   = Product::whereHas('category', fn($q) => $q->where('slug', 'sepatu-minisoccer'))->take(3)->get();
        $fgShoes     = Product::whereHas('category', fn($q) => $q->where('slug', 'sepatu-sepak-bola'))->take(3)->get();

        return view('guide', compact('futsalShoes', 'turfShoes', 'fgShoes'));
    }
}
