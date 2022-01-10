<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class ShoppingCart extends Controller
{
    //

    public function index(){


        return view("frontend.cart");
    }

    public function addtocart(Request $request, $id){
        if(Auth::check()){
            $quantity = $request->input('quantity1');
            $product = DB::select("select * from products where id = ?", [$id]);

            
            Cart:: add($id, $product[0]->name, $quantity, $product[0]->price);

            $cart = Cart::content();

            return redirect()->back()->with('message', 'IT WORKS!');;

        }
        else{
            return redirect("login");
        }

    }

    public function displayfromCart(){
        $cart = Cart::content();


        return view("frontend.cart",compact("cart"));
    }

    public function incCart($rowId){
       

        $qty = Cart::get($rowId)->qty;
        $qty++;
        Cart::update($rowId, $qty);
        
        return redirect()->back();

    }

    public function decCart($rowId){
       

        $qty = Cart::get($rowId)->qty;
        $qty--;
        Cart::update($rowId, $qty);
        
        return redirect()->back();

    }

    public function rCart($rowId){
       
        Cart::remove($rowId);
        return redirect()->back();
    }
}
