<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use App\Models\CategoryService;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $categories =Product::all();

        return view('backend.product.index', compact('categories'));
    }


    public function create()
    {
        $categories =CategoryProduct::all();
        return view('backend.product.create', compact('categories'));
    }

    public function store(Request $request)
    {
        //    dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'body' => 'required|string|max:255',

        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
        } else {
            $imageName=null;
        }

        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('products'), $videoName);
        } else {
            $videoName = null;
        }


        Product::create([
            'name' => $request->input('name'),
            'body' => $request->input('body'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,
            'video' => $videoName,
        ]);

        return redirect()->route('Product.index')->with('success');
    }


    public function edit($id)
    {
        $category = Product::findOrFail($id);
        $categories =CategoryProduct::all();

        return view('backend.product.edit', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $category = Product::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'body' => 'required|string',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('services'), $imageName);
            $category->image = $imageName;
        }else{
            $imageName = $category->image;
        }

        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('products'), $videoName);
            $category->video = $videoName;
        }else{
            $videoName = $category->video;
        }
        
        $category->update([
            'name' => $request->input('name'),
            'body' => $request->input('body'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,
            'video' => $videoName,
        ]);

        return redirect()->route('Product.index')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $category = Product::findOrFail($id);
        $category->delete();

        return redirect()->route('Product.index')->with('success', 'Product deleted successfully');
    }

}
