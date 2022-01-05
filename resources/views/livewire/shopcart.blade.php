@extends("frontend.layouts.main2")
@section("main")
<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="container" id="productContainer">
        <div class="row" style="max-height: 280px;margin-top: 40px;">
            <div class="col-md-6 col-sm-12 col-md-6 col-xl-6 col-lg-6" id="imgcol"><img id="product" src="{{asset('images/img/Aquarium-Backgrounds-Download-Free-PixelsTalk_Net.jpg')}}"></div>
            <div class="col-md-6" style="max-height: 280px;">
                <div class="row">
                <form action="" method="post">
                    @csrf
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12" id="titleRow">
                        <h1 name="id1" id="id">{{$product[0]->id}}</h1>

                    </div>

                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12" id="titleRow">
                        <h1 id="title">{{$product[0]->name}}</h1>
                        <input class="btn btn-primary" id="addToCart" type="hidden" name="id" value="{{$product[0]->id}}">
                    </div>
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h1 id="price" style="padding-top: 0px;padding-bottom: 0px;padding-left: 1%;">{{$product[0]->price}}</h1>
                    </div>
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <p>{{$product[0]->discription}}</p>
                    </div>
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="input-group" style="margin-top: 11px;">
                            
                            
                            <input class="form-control" type="text" name="quantity1" id="quantity" style="width: 100%;">
                            <input class="btn btn-primary" id="addToCart"  value="Add to cart" wire:clickprevent="addtocart({{$product[0]->id}})" >

                           
                            
                           
                        
                    </div>
                    </div>
                </form>

            
                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts
@endsection
