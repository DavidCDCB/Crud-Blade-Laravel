<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('id', 'ASC')->paginate(10);
        return view('dashboard.posts.index',['posts' => $posts]);
    }


    public function create()
    {
        $categories = Category::pluck('id','category_name');
        return view('dashboard.posts.create', ['post' => new Post(),'categories' => $categories]);
    }


    public function store(PostRequest $request)
    {
        Post::create($request->validated());
        return back()->with('status', 'Publicación generada con éxito');
    }


    public function show(Post $post)
    {
        return view('dashboard.posts.show', ['post' => $post]);
    }


    public function edit(Post $post)
    {
        $categories = Category::pluck('id','category_name');
        return view('dashboard.posts.edit', ['post' => $post,'categories' => $categories]);
    }


    public function update(PostRequest $request, Post $post)
    {
        $post->update($request->validated());
        return back()->with('status', 'Publicación actualizada con éxito');
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('status', 'Publicación eliminada con éxito');
    }
}
