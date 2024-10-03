<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\FaqCategory;
use App\Models\FaqQuestion;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $answers =Answer::all();

        return view('backend.answer.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $answers= Answer::all();
        $questions =FaqQuestion::all();
        return view('backend.answer.create', compact('questions','answers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'answer' => 'required|string|max:255',
        ]);

        Answer::create([

            'answer' => $request->input('answer'),
            'question_id' => $request->input('question_id'),

        ]);

        return redirect()->route('Answer.index')->with('success');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answer $id)
    {
        $question = FaqQuestion::findOrFail($id);
        $answers =Answer::all();

        return view('backend.answer.edit', compact('question', 'answers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $answer = Answer::findOrFail($id);

        $request->validate([
            'answer' => 'required|string',

        ]);

        $answer->update([
            'answer' => $request->input('answer'),
            'question_id' => $request->input('question_id'),

        ]);

        return redirect()->route('Answer.index')->with('success', 'Answer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->delete();

        return redirect()->route('Answer.index')->with('success', 'Answer deleted successfully');
    }
}
