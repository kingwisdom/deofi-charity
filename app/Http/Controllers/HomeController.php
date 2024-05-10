<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $event = Event::orderBy('created_at', 'desc')->limit(3)->get();
        $gallery = Gallery::orderBy('created_at', 'desc')->limit(2)->get();
        return view('home', compact('event', 'gallery'));
    }

    public function show_event($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('show_event', compact('event'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function post_contact(Request $req)
    {
        \Mail::to('scholarekundayo@gmail.com')->send(new \App\Mail\contactMail($req));

        return redirect(route('contact'))->with('status', 'Your Message has been sent successfully!');
    }
    public function volunteer()
    {
        return view('volunteers');
    }

    public function post_volunteer(Request $req)
    {
        // $file = $req->file('resume');
        // $req->validate([
        //     'resume' => 'required|mimes:pdf,xlx,csv|max:2048',
        // ]);

        $fileName = time() . '.' . $req->resume->extension();

        $req->resume->move(public_path('uploads'), $fileName);
        // dd($req->all(), $file);
        if ($req->resume) {
            \Mail::to('scholarekundayoo@gmail.com')->send(new \App\Mail\VolunteerMail($req, $req->resume));

            return redirect(route('volunteer'))->with('status', 'Your Information has been sent successfully!');
        } else {

            return redirect(route('volunteer'))->with('status', 'Your Information has not been sent!');
        }
    }

    public function sendMail(Request $req)
    {

        $data["name"] = $req->name;
        $data["email"] = $req->email;
        $data["phone"] = $req->phone;
        $data["address"] = $req->address;
        $data["state"] = $req->state;
        $data["cl"] = $req->cl;

        $data["body"] = "Volunteer Mail";
        if ($req->resume) {
            $fileName = time() . '.' . $req->resume->extension();

            $req->resume->move(public_path('uploads'), $fileName);
            $file = public_path('uploads/' . $fileName);

            \Mail::send('mail.volunt', $data, function ($message) use ($data, $file) {

                $message->to('scholarekundayoo@gmail.com', 'scholarekundayoo@gmail.com')
                    ->subject('Volunteer Mail')
                    ->cc(['adeoyetemitayo99@gmail.com', 'scholardayo@deofi.org.ng']);
                $message->attach($file);

            });
            return redirect(route('volunteer'))->with('status', 'Your Information has been sent successfully!');
        } else {
            \Mail::send('mail.volunt', $data, function ($message) use ($data) {

                $message->to('scholarekundayoo@gmail.com', 'scholarekundayoo@gmail.com')
                    ->subject('Volunteer Mail')
                    ->cc(['adeoyetemitayo99@gmail.com', 'scholardayo@deofi.org.ng']);

            });
            return redirect(route('volunteer'))->with('status', 'Your Information has been sent successfully! but resume not attached');

        }
    }
}
