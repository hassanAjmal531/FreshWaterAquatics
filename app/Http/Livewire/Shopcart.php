<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use LivewireWithPagination;

class Shopcart extends Component
{

    public function addtocart($id){
        dd("sdry");
        if(Auth::check()){
            $quantity = $request->input('quantity1');
            $product = DB::select("select * from products where id = ?", [$id]);
            
            Cart:: add($id, $product[0]->name, 1, $product[0]->price);
            $cart = Cart::content();
            return redirect('cart');
            
        }
        else{
            return redirect("login");
        } 
    }
    public function render($id)
    {
        $product = DB::select("select * from products where id = ?", [$id]);
        return view('livewire.shopcart', compact('product'));
    }
}
