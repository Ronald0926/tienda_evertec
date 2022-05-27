<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function saveProduct(Request $request)
    {
        $request->validate(['product_name' => 'required', 'price' => 'required|integer', 'description' => 'required']);
        $product = new Product;
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products')->with('success', 'Producto guardado correctamente');
    }

    public function index()
    {
        $productos = Product::all();
        return view('product', ['products'=>$productos]);
    }
}
