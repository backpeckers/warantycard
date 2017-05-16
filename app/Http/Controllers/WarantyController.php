<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Province;
use DB;

class WarantyController extends Controller
{
   public function getWarantyPage(){
   	        $customers = Customer::get();

   		return view('waranty.waranty',['waranty'=> $customers]);

   }
}
