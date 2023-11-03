<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class ContactController extends Controller
{
    public function index(){
       return view('portfolio.index'); 
    }

   public function ContactMe(Request $request){
        $date = $request->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $newContact = contact::create($date);

        Mail::to($date["email"])->send(new SendMail());

        return redirect(route('portfolio.index') . '#contact');
   }
}
