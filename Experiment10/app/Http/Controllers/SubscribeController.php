<?php

namespace App\Http\Controllers;

use App\Models\subscribe;
use App\Models\survey;
use Illuminate\Http\Request;
use DB;


class SubscribeController extends Controller
{


    public function show()
    {
        $users = subscribe::orderBy('email','asc')->get();
        return view('layouts/tables',['users'=>$users]);
            
    }

    public function total(){
    $total = DB::table('subscribes')->count('id');
    $public = DB::table('surveys')->count('id');
    return view('layouts/dashboard',['total'=> $total,'public'=>$public]);
    }

    public function addData(Request $req){
        //$subs = ['email1.required'=>'The username already exists'];
        //$this->validate($req,[
          // 'email' => 'required|unique:subscribe||email1',
        //],$subs);

    	$member = new subscribe;
    	$member->name = $req->name1;
    	$member->email = $req->email1;
    	$member->save();
    	return back();

    }

    public function userdelete($id)
    {
        $remove = subscribe::findOrFail($id);
        $remove->delete();

        return redirect('/dashboard')->with('status','Your Data is deleted');

    }
}
