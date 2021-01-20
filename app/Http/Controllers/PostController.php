<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // eager loading the post along with the related user & likes
        // to decrese the amount of queries performed
        $posts = Post::with(['user', 'likes'])->paginate(12);

        return view("posts.index", [
            "posts" => $posts
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            "body" => "required|max:200"
        ]);

        auth()->user()->posts()->create($request->only("body"));

        return back();
    }
}
