<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use App\Models\Recruiter;
use App\Models\Subscription;
use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function home(Request $request)
    {


        return view("home.index");
    }

    public function talent(Request $request)
    {
        $validator = $request->validate([
            'fname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'interest' => 'required',
            'education' => 'required',
            'linkedin' => 'required',
            'job' => 'required',
            'work' => 'required',

        ]);

        $email = Talent::where(['email' => $request->email])->count();
        if ($email > 0) {
            return back()->with('error', 'Email already registered');
        }
        $talent = Talent::create($request->all());
        $new_data['email'] = $request->email;
        $new_data['name'] = $request->fname;

        Mail::to(strtolower($request->email))->send(new Sendmail($new_data));
        // dd($request->email);
        if ($talent) {
            return back()->with('success', 'Registration successful, Email will be sent shortly');
        } else {
            return back()->with('error', 'Registration error');
        }
    }

    public function recruiter(Request $request)
    {
        $validator = $request->validate([

            'cfname' => 'required',
            'cname' => 'required',
            'cemail' => 'required',
            'cphone' => 'required',
            'role' => 'required',
            'clocation' => 'required',
            'cjob' => 'required',
            'cwork' => 'required',
            'position' => 'required',
        ]);

        $email = Recruiter::where(['cemail' => $request->cemail])->count();
        if ($email > 0) {
            return back()->with('error', 'Email already registered');
        }

        $recruiter = Recruiter::create($request->all());
        $new_data['email'] = $request->cemail;
        $new_data['name'] = $request->cfname;

        Mail::to(strtolower($request->cemail))->send(new Sendmail($new_data));
        if ($recruiter) {
            return back()->with('success', 'Registration successful, Email will be sent shortly');
        } else {
            return back()->with('error', 'Registration error');
        }
    }

    public function subscription(Request $request)
    {
        $validator = $request->validate([

            'sub_name' => 'required',
            'sub_email' => 'required',

        ]);

        $email = Subscription::where(['sub_email' => $request->sub_email])->count();
        if ($email > 0) {
            return 0;
        }
        $subscription = Subscription::create($request->all());
        if ($subscription) {
            return 1;
        } else {
            return 2;
        }
    }

    public function category()
    {  
        return view("home.option");
    }

    public function email()
    {  
        return view("mail.email2");
    }

   
}
