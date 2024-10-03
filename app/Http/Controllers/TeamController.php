<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index() {

        $teams = Team::all();
        return view('backend.team.index',compact('teams'));
    }

    public function create()
    {

        return view('backend.team.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'summary' => 'nullable|string',
            'spec' => 'nullable|string',
            'exp' => 'nullable|string',
            'skills' => 'nullable|string',
            'education' => 'nullable|string',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('teams'), $imageName);
            } else {
                $imageName=null;
            }

            Team::create([
                 'name' => $request->name,
                 'image' => $imageName,
                 'address'=>$request->address,
                 'phone'=>$request->phone,
                 'email'=>$request->email,
                 'summary'=>$request->summary,
                 'spec'=>$request->spec,
                 'exp'=>$request->exp,
                 'skills'=>$request->skills,
                 'education'=>$request->education,

            ]);

            return redirect()->route('Team.index')->with('success', 'Team added successfully');

    }


    public function edit($id)
    {
        $team =  Team::findOrFail($id);
        return view('backend.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {

        $team = Team::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
            'email' => 'nullable|email',
            'summary' => 'nullable|string',
            'spec' => 'nullable|string',
            'exp' => 'nullable|string',
            'skills' => 'nullable|string',
            'education' => 'nullable|string',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('teams'), $imageName);
            } else {
                $imageName=null;
            }

        $team->update([
            'name' => $request->input('name'),
            'image' => $imageName,
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'summary' => $request->input('summary'),
            'spec' => $request->input('spec'),
            'exp' => $request->input('exp'),
            'skills' => $request->input('skills'),
            'education' => $request->input('education'),
        ]);

        return redirect()->route('Team.index')->with('success', 'Team updated successfully!');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('Team.index')->with('success', 'Team deleted successfully!');
    }

}
