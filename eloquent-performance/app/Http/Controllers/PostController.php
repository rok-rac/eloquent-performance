<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::select('title','user_id')->with('user:id,name,email')->get();
        return view('posts.index', compact('posts'));
    }

    public function aggregationWithPosts() {
        $posts = Post::select('title')->withCount('ratings')
        ->withAvg('ratings','rating')
        ->withMax('ratings','rating')
        ->withMin('ratings','rating')
        ->get();
        return view('posts.aggregation',compact('posts'));
    }
}
