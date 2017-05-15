<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Province;
use DB;

class CusController extends Controller
{
    public function cus(){
    	//$cust = table('customer')->get();
    	return view('cus')
  
    	 //dd ($cust);
    }
    
}
