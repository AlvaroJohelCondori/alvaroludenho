<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('product_status', 2)->latest('id')->paginate(8);

        return view('products.index', compact('products'));
    }
}
