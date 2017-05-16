<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use DB;

class CustomerController extends Controller
{
    public function getCustomerPage(){
        $customers = Customer::get();
            // return $customers;
    	return view('customer.add_customer');
    }
    public function getEditCustomerPage(Request $request){
          $id = $request->id;
          // $customer = Customer::find($id);
           $customer = DB::table('customer')
                     ->where('customer_id', '=', $id)
                     ->get();
    	return view('customer.edit_customer',['customer'=> $customer]);
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
    	$customers = Customer::get();
    		return $customers;
    }

    public function editCustomer(Request $request){
        $id = $request->id;

        DB::table('customer')
            ->where('customer_id',  $id)
            ->update(['firstname' => $request->firstname,
                      'lastname' => $request->lastname,
                      'address' => $request->address,
                      'tel' => $request->tel,
                      'email' => $request->email
                    ]);
        return back();
            // return redirect()->back();
    }
}
