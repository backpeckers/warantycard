<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     protected $table = 'customer';
     protected $fillable=[
        'firstname','lastname','address','DISTRICT_ID','AMPHUR_ID','PROVINCE_ID','tel','email','customer_type'
    ];

}
/**
* 
*/
/**
* 
*/

 