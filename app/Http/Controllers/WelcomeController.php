<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return redirect()->route('login');
        return view('welcome');
    }
}
