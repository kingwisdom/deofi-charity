<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\volunteer;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function post_contact(Request $req){
        \Mail::to('scholarekundayo@gmail.com')->send(new \App\Mail\contactMail($req));

        return redirect(route('contact'))->with('status', 'Your Message has been sent successfully!');
    }
    public function volunteer(){
        return view('volunteers');
    }

    public function post_volunteer(Request $req){
        \Mail::to('scholarekundayo@gmail.com')->send(new \App\Mail\VolunteerMail($req));

        return redirect(route('volunteer'))->with('status', 'Your Information has been sent successfully!');
    }
}
