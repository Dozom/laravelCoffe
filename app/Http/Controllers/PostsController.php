<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostsController extends Controller
{
    public function index(Request $request)
    {
        $posts = Posts::all();
        return $posts;
    }
}
