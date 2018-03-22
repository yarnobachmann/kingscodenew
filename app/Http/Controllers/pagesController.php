<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;

class pagesController extends Controller
{
  public function index() {
    return view('partials.sections');
  }

  public function contact(Request $request) {
      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'textmessage' => 'min:10']);

      $data = array(
          'email' => $request->email,
          'name' => $request->naam,
          'textmessage' => $request->bericht
          );

      Mail::send('emails.contact', $data, function($message) use ($data){
          $message->from($data['email']);
          $message->to('yarnobachmann@gmail.com');
          $message->subject($data['email']);
      });

      Session::flash('success', 'Je email is gestuurd!');

      return redirect('/#contact');

}
}
