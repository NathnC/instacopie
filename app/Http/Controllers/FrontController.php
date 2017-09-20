<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Spatie\ImageOptimizer\Optimizers\Pngquant;

class FrontController extends Controller
{
    public function index()
    {
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain
            ->addOptimizer(new Pngquant([
                '-o2'
            ]))
            ->optimize('images/uploads/9d1KyC3.png', 'images/uploads/fixed.png');


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
