<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    $categories = Category::all();
    return view("products.create", compact('categories'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string|max:255|unique:products,name',
    'description' => 'nullable|string',
    'price' => 'required|numeric|min:0.01',
    'stock' => 'required|integer|min:0',
    'category_id' => 'required|exists:categories,id',
        ]);

        Product::create([

            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,

        ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    
       public function edit(Product $product)
{
    $categories = Category::all(); 
    return view('products.edit', compact('product', 'categories'));
}
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product )
    {
           $request->validate([
'name' => 'required|string|max:255|unique:products,name,' . $product->id,
    'description' => 'nullable|string',
    'price' => 'required|numeric|min:0.01',
    'stock' => 'required|integer|min:0',
    'category_id' => 'required|exists:categories,id',
        ]);

        $product->update([

            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->category_id,

        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');

    }
}
