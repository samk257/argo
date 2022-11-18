<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ProductStoreRequest;
use App\Models\Address;
use App\Models\Province;
use Illuminate\Support\Facades\Auth;

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
        $categories = Category::all();
        // $addresses = Address::all();
        $provinces = Province::all();
        return view('products.create', compact('categories','provinces'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:250'],
            'quantity' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'price' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'province_id' => ['required', 'string'],
            'maison' => ['required', 'string'],
            'details' => ['required', 'string'],
            "image" => "required",
        ]);
        $product = new Product();
            $product->name = $request->name;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->address_id = $request->province_id;
            $product->cat_id = $request->cat_id;
            $product->maison = $request->maison;
            $product->details = $request->details;
            $product->user_id = Auth::user()->id;
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
        // $addresses = Address::all();
        $provinces = Province::all();


        return view('products.edit',['products'=>$products,'categories'=>$categories,'provinces'=>$provinces]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:250'],
            'quantity' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'price' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'province' => ['required', 'string'],
            'maison' => ['required', 'string'],
            'details' => ['required', 'string'],
        ]);
            $product = Product::find($id);
            $product->name = $request->name;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
            $product->address_id = $request->address_id;
            $product->maison = $request->maison;
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
    public function viewprodbycat($id)
    {
        if(Category::where('id',$id)->exists())
        {
            $category = Category::where('id',$id)->first();
            $products = Product::where('cat_id',$category->id)->get();
            return view('showproductbycategory',compact('category','products'));
        }
        else{
            return redirect('/')->with('error',"The Category doesn't exist");
        }
    }
}
