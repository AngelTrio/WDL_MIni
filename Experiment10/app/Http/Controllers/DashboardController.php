<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function profile()
    {
        $registers = DB::table('users')->select('id','name','email')->get();
        return view('layouts.admin_update',['registers'=>$registers]);         
    }

     public function registerd(Request $req, $id='1'){
    	$member = User::find($id);
    	$member->name = $req->name;
    	$member->email = $req->email;
    	$member->update();
    	return redirect('/update');

    }
}
