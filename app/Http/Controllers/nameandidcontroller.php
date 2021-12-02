<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
//use App\Models\nameandid;

use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\Auth;

class nameandidcontroller extends Controller
{
    //
    public function nameandidform()
    {   
        $user = $user = Auth::user();
        return view('Beer.nameandid')->with($user);
    }
       
    public function insertname(Request $req){
        $user = $user = Auth::user();
        $name = $req->input('name');
        $data=array('name'=>$name);
        $id = DB::table('nameandid')->insertGetId($data);
        $message = $name." has id ".$id;
        echo($message);
        return view('Beer.nameandid')->with($user);
    }
    public function insertnameservice($name){
        $data=array('name' => $name);
        $id = DB::table('nameandid')->insertGetId($data);
        return ($id); 
    }
}


