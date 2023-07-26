<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Faker\Provider\Person;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main');
    }
}
