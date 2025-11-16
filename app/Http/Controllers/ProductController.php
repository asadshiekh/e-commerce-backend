<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
{
    return Product::all();
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'in_stock' => 'required|boolean',
    ]);

    $product = Product::create($validated);
    return response()->json($product, 201);
}


}
