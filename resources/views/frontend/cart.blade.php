@extends('frontend.layouts.main2')
@section('main')

<div class="container bg-white rounded-top mt-5" id="zero-pad">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 col-12 pt-3">
            <div class="d-flex">
                <div class="pt-1">
                    <h4>Cart</h4>
                </div>
                
            </div>
            @if(Cart::count() == 0)
                <div class="d-flex flex-column pt-4">
                    <div>
                        <h3 class="text-uppercase font-weight-normal">Cart is Empty</h3>
                    </div>
                    
                </div>
            @else
            
            <div class="d-flex flex-column pt-4">
                <div>
                    <h5 class="text-uppercase font-weight-normal">ITEMS</h5>
                </div>
                <div class="font-weight-normal">{{Cart::count()}}</div>
            </div>
            <div class="d-flex flex-row px-lg-5 mx-lg-5 mobile" id="heading">
                <div class="px-lg-5 mr-lg-5" id="produc">PRODUCTS</div>
                <div class="px-lg-5 ml-lg-5" id="prc">PRICE</div>
                <div class="px-lg-5 ml-lg-1" id="quantity">QUANTITY</div>
                <div class="px-lg-5 ml-lg-3" id="total">TOTAL</div>
            </div>
            @foreach (Cart::content() as $c)
                
            
            <div class="d-flex flex-row justify-content-between align-items-center pt-4 pb-3 mobile">
                <div class="d-flex flex-row align-items-center">
                    <div><img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" width="150" height="150" alt="" id="image"></div>
                    <div class="d-flex flex-column pl-md-3 pl-1">
                        <div>
                            <h6>{{$c->name}}</h6>
                        </div>
                       

                    </div>
                </div>
                <div class="pl-md-0 pl-1"><b>{{$c->price}}</b></div>
                <div class="pl-md-0 pl-2">
                    <div class="pl-md-0 pl-1"><b>{{$c->qty}}</b></div>

                    <a href="/dec/{{$c->rowId}}">aksjadas</a>
                    <input class="btn btn-light ms-auto action-button" type= "hidden" style="width: 80px; margin-left=5%" value="{{$c->rowId}}">
                    <a href="/inc/{{$c->rowId}}">aksjadas</a>
                    
                </div>
                <div class="pl-md-0 pl-1" ><b>{{$c->price}}</b></div>
                <div  class="close"><a href="remove/{{$c->rowId}}">&times;</a></div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
@if(Cart::count() != 0)
<div class="container bg-light rounded-bottom py-4" id="zero-pad">
    <div class="row d-flex justify-content-center">
        
        <div class="col-lg-10 col-12">
            <div class="d-flex justify-content-between align-items-center">
               
                <div class="px-md-0 px-1" id="footer-font"> <b class="pl-md-4">SUBTOTAL<span class="pl-md-4">{{Cart::subtotal()}}</span></b> </div>
                <div> <a href="checkout" class="btn btn-sm bg-dark text-white px-lg-5 px-3">Proceed to checkout</a> </div>
            </div>
        </div>
        
    </div>
</div>
@endif

@endsection
