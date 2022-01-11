<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use app\Http\Controllers\aboutus;
use app\Http\Controllers\services;
use App\Http\Controllers\Products;
use App\Http\Controllers\ShoppingCart;
use App\Http\Controllers\checkout;




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

Route::get('/', function(){
    return view("frontend.FreshwaterAquatics");
} );


Route::get('/aboutus', function(){
    return view("frontend.aboutus");
});

Route::get('/sevices', function(){
    return view("frontend.sevices");
});

Route::get('/contactus', function(){
    return view("frontend.contactus");
});

// Route::get('/product', function(){
//     return view("frontend.product");
// });

Route::get('/','App\Http\Controllers\index@index');
//Route::get('/','App\Http\Controllers\cart@index');
Route::get('/products','App\Http\Controllers\Products@index');
//Route::get('/product/{id}','App\Http\Controllers\Products@openProduct');
Route::get('/product/{id}','App\Http\Controllers\Products@openProduct');
//Route::get('/product/{id}','App\Http\Livewire\Shopcart@render');
Route::get('/search','App\Http\Controllers\Products@searchProduct');
//Route::post('/addtocart/{id}','App\Http\Controllers\ShoppingCart@addtocart');
Route::get('/cart','App\Http\Controllers\ShoppingCart@displayfromCart')->name("cart");
Route::post('/placeOrder','App\Http\Controllers\checkout@index');
Route::get('/inc/{rowId}','App\Http\Controllers\ShoppingCart@incCart');
Route::get('/dec/{rowId}','App\Http\Controllers\ShoppingCart@decCart');
Route::get('/remove/{rowId}','App\Http\Controllers\ShoppingCart@rCart');

Route::post('/adds/{id}','App\Http\Controllers\ShoppingCart@addtocart');

Route::view("/checkout","frontend.checkout")->name("checkout");
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\index@index'
)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\index@index'
)->name('dashboard');


Route::get("login", function(){
    return view("auth.login");
}
);

Route::view('login',"auth.login")->name('login');
Route::view('register',"auth.register")->name('register');
Route::get('logout','App\Http\Controllers\index@logout')->name('logout');


// admin routes

Route::get('/admin',function(){

    return view("frontend.admin");
});


Route::get('/ap',function(){

    return view("frontend.adminProducts");
});
