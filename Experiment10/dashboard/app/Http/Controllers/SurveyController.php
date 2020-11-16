<?php

namespace App\Http\Controllers;

use App\Models\survey;
use Illuminate\Http\Request;
use DB;

class SurveyController extends Controller
{


    public function people()
    {
        $person = survey::orderBy('id','asc')->get();
        return view('layouts/user',['person'=>$person]);
    }


    public function display()
    {
        return view('frontend/index');
    }
    public function details(Request $req)
    {
    	$member = new survey;
    	$member->name = $req->name2;
    	$member->email = $req->email2;
    	$member->age = $req->age;
    	$member->role = $req->role;
    	$member->outbreak = $req->outbreak;
    	$member->precautions = $req->precautions;
    	$member->covidcase_locality = $req->covidcase_locality;
    	$member->comment = $req->comment;
    	$member->save();
    	return back()->with('surveyed','Thanks For the survey');;
    }
}
