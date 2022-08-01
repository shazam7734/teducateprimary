<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Resources;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResourcesController extends Controller
{
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
        $resources=arrray();
        foreach($survey as $surveys){
        $result = DB::table('surveys')
            ->select('key_stage', 'year', 'curriculum_point','tutorial1', 'tutorial2', 'tutorial3', "primary_instructions", "secondary_instructions", "lesson", "feedback", "share")
            ->where('name', $survey->name)
            ->where('value', $survey->value)
            ->get();
        array_push($resources,$result);
        }

            
        #dd($surveys);
        //redirects to the home view with the data stored in the surveys variable
        return view('home',['resources'=>$resources]);
    }
}
