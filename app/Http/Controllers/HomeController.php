<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $user = ['bobo', 'nono', 'mgmg'];
        $colors = ['red', 'green', 'blue'];
        return view('home', compact('user', 'colors'));
    }
    public  function about()
    {
        return view('about');
    }
    public  function project()
    {
        return view('project');
    }
}
