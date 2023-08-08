<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Traits\BX;



class IndexController extends Controller
{
    public function index()
    {
        return view('admin.post.index');
    }
}