<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class checkout extends Controller
{
    //

    public function index(Request $request){
        $cart = Cart::content();
        $data = $request->all();
        $fn = $request->input("firstname");
        
        $email = $request->input("email");
        $address = $request->input("address");
        $contact = $request->input("contact");
        $city = $request->input("select");
        $zip = $request->input("zip");
        
        $userId = "";
        if(Auth::check()){
            $userId = Auth::user()->id;
        }
        DB::insert("INSERT into orders(fname, email,address, contact, city, zip, id) VALUES (?,?,?,?,?,?,?)", [$fn,$email,$address,$contact,$city,$zip,$userId]);
        $orderno = DB::select('select orderno from orders where id = ?', [$userId]);
        foreach(Cart::content() as $item){
            DB::insert('insert into orderdetails (orderno, productid,name, quantity) values (?, ?,?,?)', [(int)$orderno, $item->id, $item->name, $item->qty]);

        }
       
        
        
        
        

    }
}
