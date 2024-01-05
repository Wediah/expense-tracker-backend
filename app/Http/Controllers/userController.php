<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;

use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function show($slug): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstorFail()
        ]);
    }
}
