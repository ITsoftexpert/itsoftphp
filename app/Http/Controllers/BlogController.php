<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'category' => 'required',
            'cardimg' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        // File Upload
        if ($request->hasFile('cardimg')) {
            $image = $request->file('cardimg');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/blogs'), $imageName);
            $imagePath = 'uploads/blogs/' . $imageName;
        } else {
            $imagePath = null;
        }

        Blog::create([
            'title' => $request->title,
            'writer' => $request->writer,
            'category' => $request->category,
            'card_img' => $imagePath, // Image path store in DB
            'content' => $request->content,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog added successfully!');
    }
}
