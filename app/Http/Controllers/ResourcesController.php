<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Resources;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ResourcesController extends Controller
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

    public function ks1_resources(Request $request)
    {
        //need the same surveys function saved in the survey variable to use in the next step
        $user_id=\Auth::user()->id;
        $topic_name=strtolower($request->name);
        $surveys = DB::table('surveys')
            ->select('value')
            ->where('user_id', $user_id)
            ->where('name',"KS1_".$topic_name)
            ->orderBy('updated_at', 'DESC')
            ->limit(1)
            ->get();

        //Pulling data from the resources table based on the survey results above and saving in an array
        $resources=array();
        foreach($surveys as $survey){

        $result = DB::table('resources')
            ->select( 'year', 'curriculum_point','tutorial1', 'tutorial2', 'tutorial3', "primary_instructions", "secondary_instructions", "lesson", "feedback", "share")
            ->where('name',$topic_name)
            ->where('value', $survey->value)
            ->where('key_stage',1)
            ->get();
        array_push($resources,$result);
        }

        #$surveys[0]->value=7;
        #dd($resources);
        //redirects to the home view with the data stored in the surveys variable
        return view('ks1course',['resources'=>$resources,'topic_name'=>$topic_name,'Score'=>$surveys[0]->value]);
    }
    public function ks2_resources(Request $request)
    {
        //need the same surveys function saved in the survey variable to use in the next step
        $user_id=\Auth::user()->id; 
        $topic_name=strtolower($request->name);
        $surveys = DB::table('surveys')
            ->select('value')
            ->where('user_id', $user_id)
            ->where('name',"KS2_".$topic_name)
            ->orderBy('updated_at', 'DESC')
            ->limit(1)
            ->get();

        //Pulling data from the resources table based on the survey results above and saving in an array
        $resources=array();
        foreach($surveys as $survey){

            #echo($survey->value);
            $result = DB::table('resources')
                ->select( 'year', 'curriculum_point','tutorial1', 'tutorial2', 'tutorial3', "primary_instructions", "secondary_instructions", "lesson", "feedback", "share")
                ->where('name',$topic_name)
                ->where('value', $survey->value)
                ->where('key_stage',2)
                ->get();
            array_push($resources,$result);
        }
       # dd($resources);
        #$surveys[0]->value=7;
        #dd($resources);
        //redirects to the home view with the data stored in the surveys variable
        return view('ks2course',['resources'=>$resources,'topic_name'=>$topic_name,'Score'=>$surveys[0]->value]);
    }
}
