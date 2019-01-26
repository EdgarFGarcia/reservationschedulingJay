<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use DB;

class MainModel extends Model
{
    //
    public static function getUsers(){
    	return $query  = DB::connection('mysql')

    	// $sql = "
    	// 	SELECT * FROM users
    	// 	INNER JOIN positions ON users.positions_id = positions.id
    	// 	WHERE users.id = 1;
    	// ";

    	->table('users')
    	->select('*')
    	->join('positions', 'users.position_id', '=', 'positions.id')
    	//->where('users.id', 2)
    	->get();
    }
}
