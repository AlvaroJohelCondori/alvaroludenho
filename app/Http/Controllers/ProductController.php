<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Material;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('product_status', 2)->latest('id')->paginate(8);

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        $similars = Product::where('category_id', $product->category_id)
            ->where('product_status', 2)
            ->where('id', '!=', $product->id)
            ->latest('id')
            ->take(4)
            ->get();

        return view('products.show', compact('product', 'similars'));
    }

    public function category(Category $category)
    {
        $products = Product::where('category_id', $category->id)
            ->where('product_status', 2)
            ->latest('id')
            ->paginate(2);

        return view('products.category', compact('products', 'category'));
    }

    public function material(Material $material)
    {
        $products = $material->products()->where('product_status', 2)->latest('id')->paginate(2);

        return view('products.material', compact('products', 'material'));
    }
}
