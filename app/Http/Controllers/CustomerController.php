<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Province;
use DB;

class CustomerController extends Controller
{
    public function getCustomer(){
    	//$cust = table('customer')->get();
    	$cust = Customer::all();
    	 dd ($cust);
    }
    /*public function getProvince(){

    	$prov = Province::all();
    	dd ($prov);
    }*/
}
