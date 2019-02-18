<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

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
		public function quote()
    {
        return view('quote');
    }
		public function privacy()
    {
        return view('privacy');
    }

    public function about()
    {
        return view('about-us');
    }

    public function contactUs(Request $request) {
      $this->validate($request, [
        'name'  => 'required',
        'email'     => 'required|email',
        'phone'     => 'required',
        'body'      => 'required'
      ]);

      $data = array(
        'name' => $request->name,
        'email'     => $request->email,
        'phone'     => $request->phone,
        'body'      => $request->body
      );

      Mail::send('emails.notification', $data, function($message) use ($data){
        $message->from('support@flashmoving.net');
        $message->to('info@flashmoving.net');
        $message->subject('Contact Request');

      });

      return back();
    }
		public function sitemap()
    {
      return response()->view('sitemap')->header('Content-Type', 'text/xml');
    }
}
