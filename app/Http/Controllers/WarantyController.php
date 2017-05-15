<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Province;
use DB;

class WarantyController extends Controller
{
   public function getWarantyPage(){
   		return view('waranty.waranty');

   }
}
