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

    public function store(ProductStoreRequest $request)
    {
        $product = Product::create($request->validated());

        return redirect()->route('product.index');
    }
}
