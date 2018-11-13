<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('index');
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
