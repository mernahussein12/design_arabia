<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index()
    {
        $categoreis =CategoryProduct::all();
        return view('backend.productcategory.index', compact('categoreis'));
    }


    public function create()
    {
        return view('backend.productcategory.create');
    }

    public function store(Request $request)
    {
    //    dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
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


        CategoryProduct::create([
             'name' => $request->name,
             'image' => $imageName,
             'video' => $videoName,
        ]);

        return redirect()->route('ProductCategory.index')->with('success');
    }


    public function edit($id)
    {
        $category = CategoryProduct::findOrFail($id);
        return view('backend.productcategory.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            // 'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'video' => 'mimes:mp4,mov,avi,wmv|max:20480',
        ]);

        $category = CategoryProduct::findOrFail($id);

        $category->name = $request->name;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('products'), $imageName);
            $category->image = $imageName;
        }

        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('products'), $videoName);
            $category->video = $videoName;
        }

        $category->save();

        return redirect()->route('ProductCategory.index')->with('success', 'Data has been updated successfully');
    }

    public function destroy($id)
    {
        $category =CategoryProduct::findOrFail($id);
        $category->delete();

        return redirect()->route('ProductCategory.index')->with('success','Data is Delete Successfully');
    }
}
