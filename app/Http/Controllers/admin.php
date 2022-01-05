<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use session;

class admin extends Controller
{
    //
    public function index(){
        
        $products = DB::select('select * from products');
        return view("frontend.adminProducts", compact('products'));
    }

}
