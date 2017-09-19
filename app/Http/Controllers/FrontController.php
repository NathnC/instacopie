<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function index()
    {
        $comments = Comment::with('user')->latest()->paginate(10);
        $date = Carbon::parse($comments[0]->created_at)->diffForHumans();
        //dd($comments);
        return view('front.welcome', compact('comments', 'date'));
    }

    public function login()
    {
        return view('front.login');
    }
}
