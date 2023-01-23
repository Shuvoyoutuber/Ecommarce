<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class productController extends Controller
{
   public function addProduct(){
    return view('admin.addproduct');
   }
   public function allProduct(){
      return view('admin.allproduct');
     }
}
 