<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function privacy()
    {
        return view('tnc.privacy');
    }

    public function terms()
    {
        return view('tnc.terms');
    }
}
