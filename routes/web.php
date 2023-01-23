<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\deshboarController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\subcategoryController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\orderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(deshboarController::class)->group(function(){
    Route::get('dashboard','index')->name('Deshboard');
});

Route::controller(categoryController::class)->group(function(){
       Route::get('Addcategory','addCategory')->name('Addcategory');
       Route::get('Allcategory' ,'allcategory')->name('Allcategory');
       Route::post('categorydata' ,'allcategorydata')->name('categorydata');
       Route::get('edite/{id}' ,'edite')->name('edite');
       Route::post('update' ,'update')->name('update');
       Route::get('delete/{id}' ,'delete')->name('delete');
});

Route::controller(subcategoryController::class)->group(function(){
  Route::get('Subaddcategory','subaddCategory')->name('Subaddcategory');
  Route::get('Suballcategory','suballCategory')->name('Subaddcategory');
  Route::post('categorydatas','categorydatas')->name('categorydatas');
  
 

  
});

Route::controller(productController::class)->group(function(){
    Route::get('Addproduct','addProduct')->name('Addproduct');
           Route::get('Allproduct','allProduct')->name('Allproduct');
});

Route::controller(orderController::class)->group(function(){
    Route::get('Order','index')->name('Order');
});


require __DIR__.'/auth.php';
