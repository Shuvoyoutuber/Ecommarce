<?php

namespace App\Http\Controllers\admin;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class subcategoryController extends Controller
{
  public function  subaddCategory(){
    $categories = category::latest()->get();
    return view('admin.subaddcategory', compact('categories'));
  }
  public function  suballCategory(){
    $categories = category::latest()->get();
    return view('admin.suballcategory', compact('categories'));
  }
}
