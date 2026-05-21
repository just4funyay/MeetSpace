<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('pages.auth.register');
    }

    public function store(Request $request)
    {
        // handle registration logic
    }
}

