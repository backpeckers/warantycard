<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use DB;

class MaintenanceController extends Controller
{
   public function getMaintenancePage(){

   		return view('maintenance.maintenance');

   }
}
