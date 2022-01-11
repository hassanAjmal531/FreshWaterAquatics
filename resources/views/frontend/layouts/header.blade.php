
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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>

<body style="width: 100%;">
    <div class="text-end" style="height: 5vh;width: 100%;color: rgb(247,247,247);background: #2d2d2d;">
        <h5 id ="tl" class="text-center" style="height: 5px;font-size: 16px;margin-top: 0px;color: rgb(244,146,0);">Free Delivery, No Minimum order</h5>
    </div>
    <nav class="navbar navbar-light navbar-expand-lg navigation-clean-search text-start" id="navbar" style="background: rgb(37,37,37);">
        <div class="container">
            <a id="FWA" class="navbar-brand FWA" href="{{url('/')}}" style="color: rgb(255,253,253);">Fresh Water Aquatics</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden"></span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-end" id="navcol-1">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link navItems" href="{{url("/products")}}" style="color: rgb(236,239,241);">Live stock/Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url("/aboutus")}}" style="color: rgb(248,250,252);font-size: 15px;">About us</a></li>
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
                            <i class="material-icons sicon" style="width: 30px;height: 30px;font-size: 30px; color:orange">search</i>
                            <input class="form-control search-field" type="search" id="search-field" name="search" style="margin-left: 20px;" placeholder="search"  required>

                        </label>
                        <input class="btn btn-light ms-auto action-button" role="button" id="searchBtn"  style="background:orange;color: rgb(139,131,131); width:100px" type="submit" value= "search">

                    </div>


                </form>

            </div>
        </div>
    </nav>
    <div id="topimg" style="background: url:({{asset("images/img/freshwaterAqautaics.jpg")}}) center / cover no-repeat;"></div>
