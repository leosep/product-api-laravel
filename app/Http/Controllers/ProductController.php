<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    // Get all products
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    // Store a new product
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());

        return response()->json($product, 201); // 201 Created
    }

    // Get a single product by ID
    public function show(Product $product)
    {
        return response()->json($product, 200);
    }

    // Update an existing product
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return response()->json($product, 200);
    }

    // Delete a product
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(null, 204); // 204 No Content
    }
}
