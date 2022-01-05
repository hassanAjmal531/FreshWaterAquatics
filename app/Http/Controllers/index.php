<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;

use session;



class index extends Controller
{
    
    public function index(){
        
        $products = DB::select('select * from products');
        return view("frontend.FreshwaterAquatics", compact('products'));
    }

    public function logout(Request $request1){
        session()->invalidate();
        session()->regenerateToken();
        return redirect("/");
        
        


    }

}
