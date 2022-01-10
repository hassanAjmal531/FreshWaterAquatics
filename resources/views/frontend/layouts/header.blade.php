
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="example-content"/>
    <title>FreshwaterAquatics</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("fonts/font-awesome.min.css")}}">
    <link rel="stylesheet" href="{{asset('fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/Footer-Dark.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/Navigation-with-Search.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/styles.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/cart.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/services.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/procduct.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/css/productsAndLiveStock.css")}}">
    <link rel="stylesheet" href="{{asset("css/frontend/untitled.css")}}"> 
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
    <link rel="stylesheet" href="{{asset("css/frontend/css/checkout.css")}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <meta name="csrf_token" content="TOKEN" id="csrf_token" data-turbolinks-permanent>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    @livewireStyles
</head>

<body style="width: 100%;">
    <div class="text-end" style="height: 5vh;width: 100%;color: rgb(247,247,247);background: #2d2d2d;">
        <h5 id ="tl" class="text-center" style="height: 5px;font-size: 16px;margin-top: 0px;color: rgb(244,146,0);">Free Delivery, No Minimum order</h5>
    </div>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search" id="navbar" style="background: rgb(37,37,37);">
        <div class="container"><a class="navbar-brand" href="{{asset("/")}}" style="font-size: 30px;color: rgb(255,253,253);">Fresh Water Aquatics</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-end" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link navItems" href="{{url("/products")}}" style="color: rgb(236,239,241);">Live stock/Products</a></li>
                    <li class="nav-item"></li>
                    <li class="nav-item"><a class="nav-link" href="{{asset("/aboutus")}}" style="color: rgb(248,250,252);font-size: 20px;">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{asset("/sevices")}}" style="color: rgb(236,239,241);">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{asset("cart")}}" style="color: rgb(239,243,247);">Cart</a></li>
                    <li class="nav-item"><a class="nav-link" href="#"></a></li>
                </ul>
                <form class="ms-auto search-form" target="_self" style="margin-left: 5px;">
                    <div class="d-flex align-items-center"><label class="form-label d-flex mb-0" for="search-field"><i class="fa fa-search" style="width: 30px;height: 30px;font-size: 30px;"></i></label><input class="form-control search-field" type="search" id="search-field" name="search" style="margin-left: 20px;" value="Search"></div>
                </form><a class="btn btn-light ms-auto action-button" role="button" id="searchBtn" href="#" style="background: rgb(183,183,183);color: rgb(139,131,131);">Search</a>
            </div>
        </div>
    </nav>
    <div id="topimg"></div>