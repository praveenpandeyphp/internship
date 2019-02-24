<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrangeController extends Controller
{
    //
     public function view_file1(){
    	return view('abc');
    }
    public function view_file2(){
    	return view('text1.file1');
    }
    public function view_orange(){
    	return view('Orange');
    }
    public function InsertOrange(request $req){
    	Orange::create([
           "o_id"=>$req['o_id'],
           "o_name"=>$req['o_name'],
           "o_type"=>$req['o_type'],
          ]);
    	return view('Orange');
    }
}
