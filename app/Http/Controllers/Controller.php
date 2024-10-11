<?php

namespace App\Http\Controllers;

use App\Models\product;

abstract class Controller
{
   public function product(){
    return view('Ecommerce.product');
   }
}
