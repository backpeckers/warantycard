<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use DB;

class ReportController extends Controller
{
   public function getReportPage(){

   		return view('report.report');

   }
}
