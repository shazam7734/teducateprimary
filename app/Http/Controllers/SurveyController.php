<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Survey;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
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

    //Function to store the score and question type and save it as a "store" method
    public function store(){
        //Create a data variable to store all the user input
        $data = request()->all();
        //Create a score variable to use in the ks1 and ks2course.blade templates
        $score=[];
        //Create a question variable to store all the questions names that users will answer
        $question=[];
      foreach ($data as $key => $value) {
        
         if($key=="_token"){
             continue;
         }
         auth()->user()->survey()->create([
            'name' => $key,
            'value' => $value,
         ]);
      }
      //Once the survey is submitted, the user will be redirected to their profile page
      return redirect('/home');
     }


     //This function pulls data from the database table "surveys"
    public function index()
    {
        //Ensures the survey result being displayed on a user's 
        //profile page is only for that user 
        $user_id=\Auth::user()->id;        
        //Pulling data from the surveys table to display on a user's 
        //profile page
        $surveys = DB::table('surveys')
            ->select('name','value')
            ->where('user_id', $user_id)
            ->orderBy('updated_at', 'DESC')
            ->limit(13)
            ->get();
        #dd($surveys);
        //redirects to the home view with the data stored in the 
        //surveys variable
        return view('home',['surveys'=>$surveys]);
    }

    
    
}
