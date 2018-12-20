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
        return view('services.local-moving');
    }

    public function localMovingArea($slug)
    {
        $view = 'services.local-moving-area.' . $slug;
        if(view()->exists($view)){
            return view($view);
        } else {
            abort(404);
        }
    }

    public function interstateMoving()
    {
        return view('services.interstate-moving');
    }

    public function storage()
    {
        return view('services.storage');
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
