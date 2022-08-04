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
        $user_id=\Auth::user()->id;
        //need the same function in the home controller to ensure the surveys variale is being passed back to the home view
        $surveys = DB::table('surveys')
            ->select('name','value')
            ->where('user_id', $user_id)
            ->orderBy('updated_at', 'DESC')
            ->limit(13)
            ->get();
        #dd($surveys);
        //redirects to the home view with the data stored in the surveys variable
        return view('home',['surveys'=>$surveys]);
    }

     // function that establishing connection between survey results and resources table
     public function resources()
     {
         //need the same surveys function saved in the survey variable to use in the next step
         $user_id=\Auth::user()->id;
         $surveys = DB::table('surveys')
             ->select('name','value')
             ->where('user_id', $user_id)
             ->orderBy('updated_at', 'DESC')
             ->limit(13)
             ->get();
         
         //Pulling data from the resources table based on the survey results above and saving in an array
         //create an empty array to store the results of the following function
         $resources=arrray();
         foreach($survey as $surveys){
         $result = DB::table('surveys')
             ->select('key_stage', 'curriculum_point','tutorial1', 'tutorial2', 'tutorial3', "primary_instructions", "secondary_instructions", "lesson", "feedback", "share")
             //saves the survey name from the survey results to the name variable
             ->where('name', $survey->name)
            //saves the survey result for each point from the survey and stores it in the value variable
             ->where('value', $survey->value)
             //gets the data and saves to an array
             ->get();
        //pushes the data stored in the results variable as an array to the resources array
         array_push($resources,$result);
         }
 
         #dd($surveys);
         //redirects to the home view with the data stored in the resources array variable
         return view('home',['resources'=>$resources]);
     }

     //This function handles the user profile picture being uploaded to their profile page
     public function upload(Request $request)
     {
        # dd($request->image->getClientOriginalName());   
             if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        }
        return redirect()->back();
    }
 }
