<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Province;
use DB;

class CustomerController extends Controller
{
    public function getCustomerPage(){
    	return view('customer.add_customer');
    }
    public function getEditCustomerPage(){
    	return view('customer.edit_customer');
    }

}
