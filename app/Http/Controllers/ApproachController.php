<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Approach;
use Illuminate\Http\Request;

class ApproachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $approachs = Approach::all();
        return view('backend.approach.index', compact('approachs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.approach.create');
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
            $request->image->move(public_path('approachs'), $imageName);
        }else {
            $imageName=null;
        }


        Approach::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imageName,
        ]);

        return redirect()->route('Approach.index')->with('success', 'Approach created successfully!');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $approach= Approach::findOrFail($id);
        return view('backend.approach.edit', compact('approach'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $approach = Approach::findOrFail($id);

        $request->validate([
            'title' => 'string|max:255',
            'body' => 'string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('approachs'), $imageName);
            $approach->image = $imageName;
        }else{
            $imageName =  $approach->image;
        }

        $approach->update([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imageName,
        ]);

        return redirect()->route('Approach.index')->with('success', 'Approach updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $approach = Approach::findOrFail($id);
        $approach->delete();

        return redirect()->route('Approach.index')->with('success', 'Approach deleted successfully!');
    }
}
