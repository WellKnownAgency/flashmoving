<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Session;

class ContractController extends Controller
{
  public function postMess(Request $request)
  {
    $this->validate($request, array(
      'name'=>'required|max:255',
      'body'=>'required|max:3000',
      'email'=>'required|email|max:100',
      'phone'=>'required|max:255'
    ));

    $contact = new Contact;
    $contact->name = $request->name;
    $contact->body = $request->body;
    $contact->email = $request->email;
    $contact->phone = $request->phone;

    $contact->save();


    session()->put('success','Your message Successfully Sent');

    return back();

  }
}
