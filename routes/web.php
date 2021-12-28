<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\index;
use app\Http\Controllers\aboutus;
use app\Http\Controllers\services;
use App\Http\Controllers\Products;



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

// Route::get('/', function(){
//     return view("frontend.FreshwaterAquatics");
// } );
Route::get('/aboutus', function(){
    return view("frontend.aboutus");
});

Route::get('/sevices', function(){
    return view("frontend.sevices");
});

Route::get('/contactus', function(){
    return view("frontend.contactus");
});

Route::get('/product', function(){
    return view("frontend.product");
});

//Route::get('/','App\Http\Controllers\index@index');
Route::get('/','App\Http\Controllers\cart@index');
Route::get('/products','App\Http\Controllers\Products@index');
Route::get('/product/{id}','App\Http\Controllers\Products@openProduct');
Route::get('/search','App\Http\Controllers\Products@searchProduct');


