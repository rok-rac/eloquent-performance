<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::select('name')->withCount('posts')->get();
        return view('users.index',compact('users'));
    }

    public function topUsers() {
        $topUsers = User::select('name')
        ->withCount('ratings')
        ->withAvg('ratings','rating')
        ->having('ratings_count','>=',100)
        ->orderBy('ratings_avg_rating','desc')
        ->take(10)
        ->get();
        return view('users.top',compact('topUsers'));
    }
}
