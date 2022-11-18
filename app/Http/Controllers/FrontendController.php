<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getallregions()
    {
        // $regions= Address::all();
        $regions= Product::all();

        $data=[];
        foreach($regions as $region)
        {
            $data[]=$region['name'];
        }
        return $data;
    }
    public function searchProduct(Request $request)
    {
        $regionsearch_id = $request->region_id;
        $searched_product = $request->product_name;

        if($searched_product!= ""){
            $product = Product::where('address_id',$regionsearch_id)
            ->orwhere("name","LIKE","%$searched_product%")->first();
            if($product)
            {
                return redirect('/product/'.$product->id.'/details');
            }
            else
            {
                return redirect()->back()->with('error','No product match  with your search');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
