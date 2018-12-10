<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function localMoving()
    {
        return view('local-moving');
    }

    public function localMovingArea($slug)
    {
        return view('local-moving-area');
    }

    public function interstateMoving()
    {
        return view('interstate-moving');
    }

    public function prices()
    {
        return view('prices');
    }

    public function family()
    {
        return view('family');
    }

    public function contact()
    {
        return view('contact-us');
    }

    public function about()
    {
        return view('about-us');
    }
}
