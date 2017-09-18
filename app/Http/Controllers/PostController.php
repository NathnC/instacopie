<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->paginate(10);
        $date = Carbon::parse($comments[0]->created_at)->diffForHumans();
        return view('front.welcome', compact('comments', 'date'));
    }
}
