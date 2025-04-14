<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        // dd($blogs);
        return view('blog.index', [
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'titulo' => 'required|string|max:10'
        ]);

        $usuario = Auth::user()->id;
        Blog::create(['title' => $validated['titulo'], 'user_id' => $usuario]);
        return to_route('blog.index');
    }

    public function edit(Blog $blog)
    {
        return view('blog.edit', [
            'blog' => $blog
        ]);
    }

    public function update(Request $request, Blog $blog)
    {
        // dd($request->all());
        $validated = $request->validate([
            'titulo' => 'required|string|max:10'
        ]);
        $blog->update(['title' => $validated['titulo']]);
        return to_route('blog.index');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete($blog);
        return to_route('blog.index');
    }
}
