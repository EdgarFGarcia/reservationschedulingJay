<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\MainModel;

class MainController extends Controller
{
    //
    public function test(){

    	// return $query = MainModel::getUsers();

    	return view('jay');

    	// if($query){
    	// 	return view('jay', compact([
    	// 		'users' => $query
    	// 	]));
    	// }

    	
    }

    public function jay(){
    	return "hello world";
    }

    public function createuser(Request $r){
    	// return $r->all();
    	$query = MainModel::createuser($r);

    	if($query){
    		return response()->json([
    			'response' => true,
    			'message' => "Creating User Successful"
    		]);
    	}
    }
}
