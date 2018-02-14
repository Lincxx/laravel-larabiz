<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        //dd($user_id);
        $user = User::find($user_id);
        //dd($user);
        //dd($user->listing);
        return view('dashboard')->with('listings', $user->listings);
    }
}
