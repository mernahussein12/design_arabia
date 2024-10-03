<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use App\Models\CategoryProduct;
use App\Models\CategoryService;
use App\Models\Gallery;
use App\Models\Image;
use App\Models\Product;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Http\Request;

class GalleryControlle extends Controller
{
    public function index()
    {
        $gallaries =Gallery::all();

        return view('backend.gallary.index', compact('gallaries'));
    }

    public function create()
    {
        $categories =CategoryGallery::all();
        return view('backend.gallary.create', compact('categories'));
    }

    public function show($id)
    {
        $servicees = Service::where('category_id',$id)->get();
        $sliders = Slider::where('position_id', 22)->get();
        $images = Image::all();
        return view('frontend.pages.gallery', compact('servicees','sliders','images'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gallaries'), $imageName);
        } else {
            $imageName=null;
        }


        Gallery::create([

            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,

        ]);

        return redirect()->route('Gallary.index')->with('success');
    }

    public function edit($id)
    {
        $gallary = Gallery::findOrFail($id);
        $categories =CategoryGallery::all();

        return view('backend.gallary.edit', compact('gallary', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $gallary = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'required|string',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gallaries'), $imageName);
            $gallary->image = $imageName;
        }else{
            $imageName = $gallary->image;
        }


        $gallary->update([
            'title' => $request->input('title'),
            'category_id' => $request->input('category_id'),
            'image' => $imageName,

        ]);

        return redirect()->route('Gallary.index')->with('success', 'Gallary updated successfully');
    }

    public function destroy($id)
    {
        $gallary = Gallery::findOrFail($id);
        $gallary->delete();

        return redirect()->route('Gallary.index')->with('success', 'Gallary deleted successfully');
    }

}
