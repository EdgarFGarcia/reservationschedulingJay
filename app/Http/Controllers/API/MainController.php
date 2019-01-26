<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\MainModel;

class MainController extends Controller
{
    //
    public function test(){

    	return $query = MainModel::getUsers();

    	if($query){
    		return view('jay', compact([
    			'users' => $query
    		]));
    	}

    	
    }

    public function jay(){
    	return "hello world";
    }
}
