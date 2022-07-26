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

     //
    public function index()
    {
        $surveys = DB::select('SELECT * FROM `surveys` WHERE user_id=?;');
        return view('home')->with("results", $surveys);
    }
    
}
