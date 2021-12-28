@extends('frontend.layouts.main2')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col col-sm-12 col-md-12">
                <h1 class="text-center" id="topHeading">Services we Provide</h1>
            </div>
        </div>
        <div class="row">
            <div class="col col-sm-12 col-md-6 col-lg-6" id="consultency"><span class="text-center" id="c1">Counsultancy</span>
                <p id="c1paragraph"><br>We cover all as aspects from project design, installation and maintenance from a simple community aquarium to an ocean reef no job is too big or too small<br><br></p>
                <p id="c1paragraph-1"><br>Please contact us to help you make your Aquatic dream a reality!<br><br><br></p><button class="btn btn-primary contactusButton" type="button" style="font-size: 24px;" value="Contact Us">Contact Us</button>
            </div>
            <div class="col col-sm-12 col-md-6 col-lg-6 imgcol"><img class="img-fluid" id="firstImg" src="assets/img/wallpaperflare.com_wallpaper.jpg" width="100%" height="100%"></div>
        </div>
        <div class="row" id="2ndrow">
            <div class="col col-sm-12 col-md-6 col-lg-6" id="consultency-1"><span class="text-center" id="c-1">Aquarium Maintainance</span>
                <p id="c1paragraph-2"><br>We cover all as aspects from project design, installation and maintenance from a simple community aquarium to an ocean reef no job is too big or too small<br><br></p>
                <p id="c1paragraph-3"><br>Please contact us to help you make your Aquatic dream a reality!<br><br><br></p><button class="btn btn-primary contactusButton" id="maintaince" type="button" style="font-size: 24px;" value="Contact Us">Book for maintance</button>
            </div>
            <div class="col col-sm-12 col-md-6 col-lg-6 imgcol"><img class="img-fluid" id="firstImg-1" src="assets/img/wallpaperflare.com_wallpaper.jpg" width="100%" height="100%"></div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    @endsection