<?php

namespace Shadow\Core\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Shadow\Core\Models\ZipCode;

class ShadowCoreController extends Controller
{
    //
    public function checkZip(Request $request){
    	
    	$data_zip = ZipCode::find_Zip_id($request->zip_code);

    	return view('zip_check')->with('data_zip', $data_zip);

    }

}
