<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class ProjectControlle extends Controller
{

    public function index() {

        $projects = Project::all();
        return view('backend.project.index',compact('projects'));
    }

    public function create()
    {

        return view('backend.project.create');
    }

    public function show($id)
    {

        $project = Project::find($id);
        return view('frontend.pages.single_project', compact('project'));
    }

    public function store(Request $request)
    {
        //    dd($request);
        $request->validate([
            'project_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'body' => 'required|string|max:255',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('projects'), $imageName);
        } else {
            $imageName=null;
        }

        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('projects'), $videoName);
        } else {
            $videoName = null;
        }


        Project::create([
            'project_name' => $request->input('project_name'),
            'company_name' => $request->input('company_name'),
            'body' => $request->input('body'),
            'date' => $request->input('date'),
            'image' => $imageName,
            'video' => $videoName,
        ]);

        return redirect()->route('Project.index')->with('success');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('backend.project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'project_name' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'body' => 'required|string|max:255',
//            'date' => 'date|date_format:Y-m-d',
        ]);



        $project = Project::findOrFail($id);




        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('projects'), $imageName);
            $project->image = $imageName;
        }else{
            $imageName = $project->image;
        }

        if ($request->hasFile('video')) {
            $videoName = time() . '.' . $request->video->extension();
            $request->video->move(public_path('projects'), $videoName);
            $project->video = $videoName;
        }else{
            $videoName = $project->image;
        }

        $project->update([
            'project_name' => $request->input('project_name'),
            'company_name' => $request->input('company_name'),
            'body' => $request->input('body'),
            'date' => $request->input('date'),
            'image' => $imageName,
            'video' => $videoName,
        ]);


        return redirect()->route('Project.index')->with('success', 'Data has been updated successfully');
    }

    public function destroy($id)
    {
        $project =Product::findOrFail($id);
        $project->delete();

        return redirect()->route('Project.index')->with('success','Data is Delete Successfully');
    }
}
