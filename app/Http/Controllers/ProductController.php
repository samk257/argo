<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductStoreRequest;

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

    public function show($id){
        $product = Product::find($id);

        return view('products.show', compact('product'));


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
    public function edit($id)
    {
        $products=Product::find($id);
        $categories = Category::all();

        return view('products.edit',['products'=>$products,'categories'=>$categories]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:250'],
            'quantity' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'price' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'details' => ['required', 'string'],
        ]);
            $product = Product::find($id);
            $product->name = $request->name;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->details = $request->details;

        if($request->hasfile('image'))
        {
            $destination = 'public/products'.$product->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->validate([
                "image" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:5048",
              ]);
              if($request->hasFile('image')){
                $file= $request->file('image');
                $filename= $file->getClientOriginalName();
                $file-> move(public_path('public/products'), $filename);
                $product['img']= $filename;
            }
        }

        if($product->save()){
            session()->flash('success','The product is updated');
            return redirect()->route('product.index');

        }else{
            return redirect()->back()->with('error','Failed to register');
        }
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        $destination = 'public/products'.$product->img;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $product->delete();
        return redirect()->back()->with('success','The product is deleted');
    }
    public function productDetails($id)
    {
        $prodDetails=Product::find($id);
        return view('productdetails', compact('prodDetails'));

    }
}
