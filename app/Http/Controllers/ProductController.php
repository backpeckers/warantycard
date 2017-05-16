<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;
use App\Model\Product;
use DB;

class ProductController extends Controller
{
    public function getProductPage(){
    	$products = Product::get();
           // return $products;
    	return view('product.product',['products'=> $products]);
    }
    public function getAddProductPage(){
    	return view('product.add_product');
    }
    public function getEditProductPage(Request $request){
    	$id = $request->id;
          // $customer = Customer::find($id);
           $product = DB::table('product')
                     ->where('product_id', '=', $id)
                     ->get();
    	return view('product.edit_product',['product'=> $product]);
    }

}
