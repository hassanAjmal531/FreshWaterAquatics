@extends("frontend.layouts.main2")
@section("main")
    <div class="container" id="productContainer">
        <div class="row" style="max-height: 280px;margin-top: 40px;">
            <div class="col-md-6 col-sm-12 col-md-6 col-xl-6 col-lg-6" id="imgcol"><img id="product" src="{{asset('images/img/Aquarium-Backgrounds-Download-Free-PixelsTalk_Net.jpg')}}"></div>
            <div class="col-md-6" style="max-height: 280px;">
                <div class="row">
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12" id="titleRow">
                        <h1 id="title">{{$product[0]->name}}</h1>
                    </div>
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <h1 id="price" style="padding-top: 0px;padding-bottom: 0px;padding-left: 1%;">{{$product[0]->price}}</h1>
                    </div>
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <p>{{$product[0]->discription}}</p>
                    </div>
                    <div class="col col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="input-group" style="margin-top: 11px;"><input class="form-control" type="number" id="quantity" style="width: 252.5px;"><button class="btn btn-primary" id="addToCart" type="button">Add to Cart</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
@endsection