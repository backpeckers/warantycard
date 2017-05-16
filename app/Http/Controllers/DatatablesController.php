<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use Datatables;
class DatatablesController extends Controller
{
    public function anyData()
	{
	    return Datatables::of(Customer::query())->make(true);
	}
}
