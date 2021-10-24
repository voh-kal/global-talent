<?php

namespace App\Http\Controllers;

use App\Models\Recruiter;
use App\Models\Subscription;
use App\Models\Talent;
use Illuminate\Http\Request;

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
        if ($talent) {
            return back()->with('success', 'registration successful');
        } else {
            return back()->with('error', 'registration error');
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

        $email = Recruiter::where(['email' => $request->email])->count();
        if ($email > 0) {
            return back()->with('error', 'Email already registered');
        }

        $recruiter = Recruiter::create($request->all());
        if ($recruiter) {
            return back()->with('success', 'registration successful');
        } else {
            return back()->with('error', 'registration error');
        }
    }

    public function subscription(Request $request)
    {
        $validator = $request->validate([

            'sub_name' => 'required',
            'sub_email' => 'required',

        ]);

        $email = Talent::where(['email' => $request->email])->count();
        if ($email > 3) {
            return back()->with('error', 'messages been processed');
        }
        $subscription = Subscription::create($request->all());
        if ($subscription) {
            return back()->with('success', 'subscription successful');
        } else {
            return back()->with('error', 'subscription error');
        }
    }
}
