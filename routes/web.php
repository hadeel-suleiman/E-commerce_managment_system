<?php

use App\Http\Middleware\CheckAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


 Route::group(['middleware'=>'checkadmin'], function(){
 Route::get('/dashboard', function(){
  return view('admindash');
 });
 });
    //products routs
   Route::resource('/products', ProductController::class);
   Route::get('/products/{id}/show', [ProductController::class, 'show'])->name('products.show');
   Route::post('products/{id}/force-delete', [ProductController::class, 'forceDelete'])->name('products.forceDelete');
   Route::put('products/{id}/restore', [ProductController::class, 'restore'])->name('products.restore');



   Route::resource('/categories', CategoryController::class);



   Route::get('/orders', [OrderController::class, "index"])->name("orders.index");
   Route::get('/orders/{id}', [OrderController::class, "show"])->name("orders.show");
   Route::delete('/orders/{id}', [OrderController::class, "show"])->name("orders.destroy");




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



