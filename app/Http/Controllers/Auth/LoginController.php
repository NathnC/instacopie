<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function store()
    {
        if(auth()->attempt(request(['email', 'password'])))
        {
            return redirect()->route('home');
        } else {
            return back();
        }

    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
