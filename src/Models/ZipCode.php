<?php

namespace Shadow\Core\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class ZipCode extends Model
{
    //

	protected $table = 'zipcodes';



	public static function find_Zip_id($id){

		return DB::table('zipcodes')->find($id);
	}

}
