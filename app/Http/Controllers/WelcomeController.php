<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
    //
    public function welcome(Request $request)
    {
        $posts = Posts::all();
        Log::info("Test" . $posts);
        return view('welcome', ['posts' => $posts]);
    }
}
