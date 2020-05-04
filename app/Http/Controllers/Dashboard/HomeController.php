<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Information;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = User::all()->count();
        $information = Information::all()->count();

        return view('dashboard.index', compact('information', 'user'));
    }
}
