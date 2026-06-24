<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
{
    $request->merge([
        'stock' => (int) $request->stock,
        'price' => (float) $request->price,
    ]);

    $request->validate([
        'category_id' => 'required',
        'name' => 'required',
        'stock' => 'required|integer|min:1',
        'price' => 'required|numeric|min:1',
        'description' => 'nullable|string',
    ]);

    Product::create($request->all());

    return redirect()
        ->route('products.index')
        ->with('success', 'Product created successfully');
}

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->merge([
        'stock' => (int) $request->stock,
        'price' => (float) $request->price,
    ]);
        $request->validate([
            'category_id' => 'required',
            'name' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }
}