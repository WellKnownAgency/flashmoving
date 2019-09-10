<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
use Mail;

class PageController extends Controller
{
    public function index()
    {   
        $price1 = Price::where('name', '=', '2 movers')->first();
        $price2 = Price::where('name', '=', '3 movers')->first();
        $price3 = Price::where('name', '=', '4 movers')->first();
        return view('index')->withPrice1($price1)->withPrice2($price2)->withPrice3($price3);
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

		public function longDistanceArea($slug)
    {
        $view = 'services.long-distance-area.' . $slug;
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

		public function packing()
    {
        return view('services.packing');
    }

    public function prices()
    {   
        $price1 = Price::where('name', '=', '2 movers')->first();
        $price2 = Price::where('name', '=', '3 movers')->first();
        $price3 = Price::where('name', '=', '4 movers')->first();
        return view('prices')->withPrice1($price1)->withPrice2($price2)->withPrice3($price3);
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

    public function admin()
    {
        return view('admin/index');
    }
}
