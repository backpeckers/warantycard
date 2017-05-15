<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Province;
use DB;

class ProductController extends Controller
{
    public function getProductPage(){
    	return view('product.product');
    }
    public function getAddProductPage(){
    	return view('product.add_product');
    }

}
