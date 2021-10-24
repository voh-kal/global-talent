<?php

namespace App\Http\Controllers;
use App\Models\Recruiter;
use App\Models\Subscription;
use App\Models\Talent;
use Illuminate\Http\Request;



class AdminController extends Controller
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

    public function admin_home(Request $request)
    {       
       $subscriber = Subscription::count();      
       $recruiter = Recruiter::count();      
       $talent = Talent::count();

        return view("admin.index", compact('subscriber','recruiter','talent'));
    }

    public function talent(Request $request)
    {       
       $talent = Talent::all();
    //    dd($talent );
        return view("admin.talent", compact('talent'));
    }

    public function recruiter(Request $request)
    {
       $recruiter = Recruiter::all();
    //    dd($recruiter );
        return view("admin.recruiter", compact('recruiter'));
    }

    public function subscriber(Request $request)
    {
       
       $subscriber = Subscription::all();
      
    //    dd($subscriber = $request->all() );
        return view("admin.subscribers", compact('subscriber'));
    }

    public function view_recruiter($id)
    {
    
       $recruiter = Recruiter::find($id);
      
    //    dd($subscriber = $request->all() );
        return view("admin.view_recruiter", compact('recruiter'));
    }

    public function view_talent($id)
    {
    
       $talent = Talent::find($id);
      
    //    dd($subscriber = $request->all() );
        return view("admin.view_talent", compact('talent'));
    }

}
