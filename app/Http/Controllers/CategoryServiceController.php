<?php

namespace App\Http\Controllers;

use App\Models\CategoryService;
use App\Models\Service;
use Illuminate\Http\Request;

class CategoryServiceController extends Controller
{
    public function index()
    {
        $categoreis =CategoryService::all();
        return view('backend.servicecategory.index', compact('categoreis'));
    }



    public function create()
    {
        $categoreis =CategoryService::all();
        return view('backend.servicecategory.create',compact('categoreis'));
    }


    public function show($id)
    {
        $servicee = CategoryService::find($id);
        $cat_services = Service::where('category_id',$id)->get();
        return view('frontend.pages.category_serv', compact('servicee','cat_services'));
    }


    public function store(Request $request)
    {
    //    dd($request);
        $request->validate([
            'name_en' => 'required|string|max:255',
            'text' => 'string|max:255',

        ]);


        if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('services'), $imageName);
        } else {
            $imageName=null;
        }

        CategoryService::create([
            'name_en' => $request->name_en,
            'text' => $request->text,
             'image' => $imageName,
        ]);

        return redirect()->route('ServiceCategory.index')->with('success');
    }

    public function edit($id)
    {
        $category =  CategoryService::findOrFail($id);
        return view('backend.servicecategory.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'text' => 'string|max:255',
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $categoreis = CategoryService::findOrFail($id);

        $categoreis->name_en = $request->name_en;
        $categoreis->text = $request->text;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('services'), $imageName);
            $categoreis->image = $imageName;
        }

        $categoreis->save();

        return redirect()->route('ServiceCategory.index')->with('success','Data is Updated Successfully');
    }

    public function destroy($id)
    {
        $category = CategoryService::findOrFail($id);
        $category->delete();

        return redirect()->route('ServiceCategory.index')->with('success','Data is Delete Successfully');
    }
}
