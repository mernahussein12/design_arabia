<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = FaqCategory::all();
        return view('backend.faqcategory.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.faqcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        FaqCategory::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('FaqCategory.index')->with('success', 'Faq  Category created successfully');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
       $faq = FaqCategory::findOrFail($id);
        return view('backend.faqcategory.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $Faq = FaqCategory::findOrFail($id);
        $Faq->update([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('FaqCategory.index')->with('success', ' Faq Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faq = FaqCategory::findOrFail($id);
        $faq->delete();

        return redirect()->route('FaqCategory.index')->with('success', ' Faq Category deleted successfully');
    }
}
