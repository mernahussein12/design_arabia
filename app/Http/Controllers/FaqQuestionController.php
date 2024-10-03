<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallery;
use App\Models\FaqCategory;
use App\Models\FaqQuestion;
use App\Models\Gallery;
use Illuminate\Http\Request;

class FaqQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions =FaqQuestion::all();

        return view('backend.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $faqs= FaqCategory::all();
        $questions =FaqQuestion::all();
        return view('backend.question.create', compact('questions','faqs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        FaqQuestion::create([

            'question' => $request->input('question'),
            'category_id' => $request->input('category_id'),


        ]);

        return redirect()->route('FaqQuestion.index')->with('success');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $question = FaqQuestion::findOrFail($id);
        $faqs =FaqCategory::all();

        return view('backend.question.edit', compact('question', 'faqs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $question = FaqQuestion::findOrFail($id);

        $request->validate([
            'question' => 'required|string',

        ]);

        $question->update([
            'question' => $request->input('question'),
            'category_id' => $request->input('category_id'),

        ]);

        return redirect()->route('FaqQuestion.index')->with('success', 'FaqQuestion updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $question = FaqQuestion::findOrFail($id);
        $question->delete();

        return redirect()->route('FaqQuestion.index')->with('success', 'FaqQuestion deleted successfully');
    }
}
