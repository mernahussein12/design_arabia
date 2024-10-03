<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Mission;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('backend.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'string|max:255',
            'body' => 'string',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('abouts'), $imageName);
        }else {
            $imageName=null;
        }


        About::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imageName,
        ]);

        return redirect()->route('About.index')->with('success', 'About created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $about= About::findOrFail($id);
        return view('backend.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $about = About::findOrFail($id);

        $request->validate([
            'title' => 'string|max:255',
            'body' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('abouts'), $imageName);
            $about->image = $imageName;
        }else{
            $imageName =  $about->image;
        }

        $about->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imageName,
        ]);

        return redirect()->route('About.index')->with('success', 'About updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $about = About::findOrFail($id);
        $about->delete();

        return redirect()->route('About.index')->with('success', 'About deleted successfully!');
    }
}
