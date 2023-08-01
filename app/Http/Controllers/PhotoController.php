<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Post;
use App\Models\Tag;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotoRequest $request)
    {
        $data = $request->validated();
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);
        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $post = Post::firstOrFail();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePhotoRequest $request, Photo $photo)
    {
        $data = $request->validated();
//        dd($data);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::firstOrFail();
        $post->update($data);
        $post->tags()->sync($tags);

        return redirect()->route('post.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        $post->delete();
        return redirect()->route('post.index', $post->id);
    }
}
