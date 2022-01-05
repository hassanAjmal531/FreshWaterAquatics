@extends('frontend.layouts.main')
@section('main')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FreshwaterAquatics</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset("css/frontend/css/Footer-Dark.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/Navigation-with-Search.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/styles.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/Footer-Dark.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/Navigation-with-Search.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/styles.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/services.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/procduct.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/productsAndLiveStock.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/untitled.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>

<body style="color: rgb(210,211,211);background: rgb(225,225,225);">
    <div class="text-end" style="height: 5vh;width: 100%;color: rgb(247,247,247);background: #2d2d2d;">
        <h5 id="freeDheader" class="text-center" style="height: 5px;font-size: 16px;margin-top: 0px;color: rgb(244,146,0);">Free Delivery, No Minimum order</h5>
    </div>
    <section class="text-start" style="background: url('{{asset('images/img/Aquarium-Backgrounds-Download-Free-PixelsTalk_Net.jpg')}}') center / cover no-repeat, #434242;width: 100%;height: 100vh;filter: brightness(112%);font-size: 20px;">
        <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search" id="navbar" style="background: rgb(37,37,37);">
            <div class="container"><a class="navbar-brand" href="{{url('/')}}" style="font-size: 30px;color: rgb(255,253,253);">Fresh Water Aquatics</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse text-end" id="navcol-1">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link navItems" href="{{url("/products")}}" style="color: rgb(236,239,241);">Live stock/Products</a></li>
                        <li class="nav-item"></li>
                        <li class="nav-item"><a class="nav-link" href="{{url("/aboutus")}}" style="color: rgb(248,250,252);font-size: 20px;">About us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url("/sevices")}}" style="color: rgb(236,239,241);">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url("cart")}}" style="color: rgb(239,243,247);">Cart</a></li>
                        
                        @if(Route::has("login"))
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{url("logout")}}" style="color: rgb(239,243,247);">logout</a></li>
                            @else
                            <li class="nav-item"><a class="nav-link" href="{{url("login")}}" style="color: rgb(239,243,247);">login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url("register")}}" style="color: rgb(239,243,247);">register</a></li>
                            @endif

                        @endif
                       
                    </ul>
                    <form class="ms-auto search-form" target="_self" style="margin-left: 5px;"action="/search" method='get' >
                        <div class="d-flex align-items-center">
                            <label class="form-label d-flex mb-0" for="search-field">
                                <i class="fa fa-search" style="width: 30px;height: 30px;font-size: 30px;"></i>
                            </label>
                            <input class="form-control search-field" type="search" id="search-field" name="search" style="margin-left: 20px;" placeholder="search">
                        </div>
                        <input class="btn btn-light ms-auto action-button" role="button" id="searchBtn"  style="background: rgb(183,183,183);color: rgb(139,131,131);" type="submit" value= "search">

                    </form>

                </div>
            </div>
        </nav>
        <div class="text-center" style="padding-top: 10%;margin-right: 6px;">
            <h1 style="color: rgb(253,255,255);font-size: 8vh;">Fresh Water Aquatics</h1>
            <p style="font-size: 4vh;">Planted tank aquariums and tropical Live Stock</p>
        </div>
    </section>
    <section class="text-start" id="sale-section">

        <div class="add-box-sale">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <h1 id="endsale">End of Year Sale</h1>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="banner-box style-a"> <img src="{{asset("images/img/freshwaterAqautaics.jpg")}}" alt="">
                            <div class="banner-add-dit">
                                <div class="of-tag"> <span class="text-inner">
                                10% Sale
                            </span> </div>
                                <h2>livestock and plants</h2>
                                <a class="hvr-bounce-to-bottom" href="#">SHOP NOW</a> </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="banner-box style-b"> <img src="{{asset("images/img/freshwaterAqautaics.jpg")}}" alt="">
                            <div class="banner-add-dit">
                                <div class="of-tag"> <span class="text-inner">
                                30% Sale
                            </span> </div>
                                <h2>Accesories</h2>
                                <a class="hvr-bounce-to-bottom" href="#">SHOP NOW</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section >
        <div class="container">
            <div class="row TopTitle">
                <div class="col-md-12" id="title">
                    <h1 id="livestock">liveStock and Accessories</h1>
                </div>
            </div>
            <div class="row productsRow">


                @foreach ($products as $product)
                <div class="col-md-4 col-sm-12 col-md-4 col-lg-4 col-xl-3">
                    <a href="/product/{{$product->id}}" style= "color: black"><div class="products"><img class="productImage" src="assets/img/wallpaperflare.com_wallpaper.jpg">
                        <h1 class="ProductName" style="width: 100%;/*height: 53px;*/">{{$product->name}}</h1>
                        <h1 class="ProductPrice">{{$product->price}}</h1>

                    </div></a>

                </div>
                @endforeach


            </div>


        </div>





    </section>
  @endsection
