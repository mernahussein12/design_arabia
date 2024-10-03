<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('backend.blog.index', compact('blogs'));
    }

    public function show($id)
    {

        $blog = Blog::find($id);
        return view('frontend.pages.single_blog', compact('blog'));
    }

    public function create()
    {
        return view('backend.blog.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
        }else {
            $imageName=null;
        }


        Blog::create([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imageName,
        ]);

        return redirect()->route('Blog.index')->with('success', 'Blog created successfully!');
    }

    public function edit($id)
    {
        $blog= Blog::findOrFail($id);
        return view('backend.blog.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {

        $blog = Blog::findOrFail($id);

        $request->validate([
            'name' => 'string|max:255',
            'title' => 'string|max:255',
            'body' => 'string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
            $blog->image = $imageName;
        }else{
            $imageName = $blog->image;
        }

        $blog->update([
            'name' => $request->input('name'),
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'image' => $imageName,
        ]);

        return redirect()->route('Blog.index')->with('success', 'Blog updated successfully!');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('Blog.index')->with('success', 'Blog deleted successfully!');
    }
}
