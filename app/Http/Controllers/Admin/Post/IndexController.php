<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\FilterRequest;
use App\Http\Traits\BX;
use App\Models\Post;

class IndexController extends Controller
{
    public function index()//FilterRequest $request)
    {









        // $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $posts = Post::simplePaginate(5);
        // $posts = [];
        // dd($posts->links());
        return view('admin.post.index', compact('posts'));
    }
}