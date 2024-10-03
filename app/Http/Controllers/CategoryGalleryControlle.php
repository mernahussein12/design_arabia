<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use Illuminate\Http\Request;

class CategoryGalleryControlle extends Controller
{
    public function index()
    {
        $categories = CategoryGallery::all();
        return view('backend.gallarycategory.index', compact('categories'));
    }

    public function create()
    {
        return view('backend.gallarycategory.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string',
        ]);

        CategoryGallery::create([
            'name' => $request->input('name'),
            'text' => $request->input('text'),
        ]);

        return redirect()->route('GallaryCategory.index')->with('success', 'Category created successfully');
    }

    public function show($id)
    {
//        $gallery = Gallery::find($id);
//        $items = Item::where('gallery_id', $id)->get();

        $gallery = Gallery::find($id);
        $items = Item::where('gallery_id', $id)->get();
        return view('back.pages.gallery.show', compact('items','gallery'));
    }

    public function edit($id)
    {
        $category = CategoryGallery::findOrFail($id);
        return view('backend.gallarycategory.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'text' => 'required|string|max:255',
        ]);

        $category = CategoryGallery::findOrFail($id);
        $category->update([
            'name' => $request->input('name'),
            'text' => $request->input('text'),
        ]);

        return redirect()->route('GallaryCategory.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = CategoryGallery::findOrFail($id);
        $category->delete();

        return redirect()->route('GallaryCategory.index')->with('success', 'Category deleted successfully');
    }
}
