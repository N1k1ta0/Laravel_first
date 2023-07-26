<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Faker\Provider\Person;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);


        return redirect()->route('post.index');
    }

    public function show($postid)
    {
        $post = Post::findOrFail($postid);
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Post $post)
    {

        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function delete()
    {
        $post = Post::find(2);
        $post->delete();
        dd('delete');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index', $post->id);
    }

    public function FirstOrCreate()
    {
        $post = Post::find(1);
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some inter',
            'image' => 'some imageblbalbalb.sda',
            'likes' => '222',
            'is_published' => '1',
        ];
        $post::FirstOrCreate([
            'title' => 'some some'
        ], [
            'title' => 'another title of post',
            'content' => 'some inter',
            'image' => 'some imageblbalbalb.sda',
            'likes' => '222',

            'is_published' => '1',
        ]);
        dump($post->content);
        dd('finished');
    }

    public function updateOrCreate()
    {
        $post = Post::updateOrCreate([
            'title' => 'title of post'
        ], [
            'title' => 'updateORcreate title of post',
            'content' => 'updateORcreate some inter',
            'image' => 'updateORcreate imageblbalbalb.sda',
            'likes' => '555',
            'is_published' => '1'
        ]);
        dump($post->title);
        dd('salam yaleikuma rahmat addula');
    }
}
