<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //need the same function in the home controller to ensure the surveys variale is being passed back to the home view
        $user_id=\Auth::user()->id;
        #dd(strval($user_id));
        #$user_id=strval($user_id)
        $surveys = DB::select('select name, value from surveys where user_id=?',[$user_id]);
        #dd($surveys);
        return view('home',['surveys'=>$surveys]);
    }
}
