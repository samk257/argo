<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * @param \App\Http\Requests\ProductStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = ["ALIMENTS","ELECTRONIQUE", "AUTOMOBILE"];

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:250'],
            'quantity' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'price' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'details' => ['required', 'string'],
            "image" => "required",
        ]);
        $product = new Product();
            $product->name = $request->name;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->details = $request->details;
        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('public/products'), $filename);
            $product['img']= $filename;
        }
        $product->save();
        return redirect()->route('product.index');
    }
}
