<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }
    public function create()
    {
        return view('categories.create');
    }

    /**
     * @param \App\Http\Requests\CategoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:250'],
            "image" => "required",
        ]);
        $category = new Category();
            $category->name = $request->name;
        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file->move(public_path('public/category'), $filename);
            $category['image']= $filename;
        }
        $category->save();
        return redirect()->route('category.index');
    }
    public function edit($id)
    {
        $categories=Category::find($id);
        return view('categories.edit',['categories'=>$categories]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:250'],
            "image" => "required",
        ]);
            $category = Category::find($id);
            $category->name = $request->name;

        if($request->hasfile('image'))
        {
            $destination = 'public/category'.$category->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $request->validate([
                "image" => "required|image|mimes:jpg,png,jpeg,gif,svg|max:5048",
              ]);
                $file= $request->file('image');
                $filename= $file->getClientOriginalName();
                $file->move(public_path('public/category'), $filename);
                $category['image']= $filename;
            }

        if($category->update()){
            session()->flash('success','The product is updated');
            return redirect()->route('category.index');

        }else{
            return redirect()->back()->with('error','Failed to register');
        }
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $destination = 'public/category'.$category->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $category->delete();
        return redirect()->back()->with('success','The category is deleted');
    }
}
