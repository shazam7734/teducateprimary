<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Survey;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{
    //Function to store the score and question type and save it as a "store" method
    public function store(){
        $data = request()->all();
        $score=[];
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
        //Ensures the survey result being displayed on a user's profile page is only for that user 
        $user_id=\Auth::user()->id;
        //dd method is a debugging technique used to see if data is being passed or not
        #dd(strval($user_id));
        #$user_id=strval($user_id);
        //Pulling data from the surveys table to display on a user's profile page
        $surveys = DB::select('select name, value from surveys where user_id=?, ORDER BY updated_at DESC LIMIT 13', [$user_id]);
        #dd($surveys);
        //redirects to the home view with the data stored in the surveys variable
        return view('home',['surveys'=>$surveys]);
    }
    
}
