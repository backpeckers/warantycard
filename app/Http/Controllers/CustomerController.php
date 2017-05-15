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
    public function addCustomer(Request $request){
        $customer = new Customer();
        // dd($request);
        // dd($customer);
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->address = $request->address;
        // $customer->DISTRICT_ID = $request->
        // $customer->AMPHUR_ID = $request->
        // $customer->PROVINCE_ID = $request->
        $customer->tel = $request->telephone;
        $customer->email = $request->email;
        $customer->customer_type = $request->cust_type;
        $customer->save();
        return back();
    }

    public function getCustomer(){
    	$customer = Customer::get();
    		return $customer;
    }
}
