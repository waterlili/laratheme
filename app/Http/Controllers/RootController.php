<?php

namespace App\Http\Controllers;
use DB;
use App\Contactus;
use App\service;
use App\Portfolio;
use App\Team;
use App\Logo;
use App\Project;
use Illuminate\Http\Request;

class RootController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(service $servs,Portfolio $prts,Team $tms,Logo $lgs,Project $prjs)
    // {    dd("sdfs");
    {
        $servs=service::all();
        $prts=Portfolio::all();
        $tms=Team::all();
        $lgs=Logo::all(); 
        $prjs=Project::all();
        $Items = DB::table('main_menu')->get();
        $abs = DB::table('about')->get();
        return view('home',compact('Items','servs','prts','abs','tms','lgs','prjs'));
    }
    public function store(Request $request,Contactus $contact)
    {
        # code...
        // protected $fillable = ['username'];
        $contact = new Contactus;
        if ( $request->ajax() ) {
        $contact->name = $request->username;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;
        $contact->save();
        return response(['msg' => 'Sent a new message', 'status' => 'success']);
       }
       return response(['msg' => 'Failed to send a new message', 'status' => 'failed']);
    }

}
