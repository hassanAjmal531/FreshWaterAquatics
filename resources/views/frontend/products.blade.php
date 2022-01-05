@extends("frontend.layouts.main2")
@section("main")
    <div class="container">
        <div class="row TopTitle">
            <div class="col-md-12" id="title">
                <h1 id="livestock">liveStock and Accessories</h1>
            </div>
        </div>
        <div class="row productsRow">
            @foreach ($products as $product)
            <div class="col-md-3 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <a href="/product/{{$product->id}}" style= "color: black"><div class="products"><img class="productImage" src="assets/img/wallpaperflare.com_wallpaper.jpg">
                    <h1 class="ProductName" style="width: 100%;/*height: 53px;*/">{{$product->name}}</h1>
                    <h1 class="ProductPrice">{{$product->price}}</h1>
                    <button class="btn btn-primary ProductAddTocart" type="button">Add To Cart</button>
                </div></a>         
            </div>
            @endforeach
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>


@endsection