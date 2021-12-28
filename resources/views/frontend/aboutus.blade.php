@extends('frontend.layouts.main2')
@section('main')
    <div id="about">
        <div class="row" id="frow">
            <div class="col col-sm-12 col-md-6">
                <p id="howStarted" style="font-size: 33px;">How Fresh Water Aquatics Started</p>
                <p id="secondparagraph"><br>Fresh Water Aquatics was started in 2020 by a self-professed planted Tank Enthusiast and animal specialist. It was envisioned as a one-stop outlet where customers could find everything they needed, from technical product specifications, reef aquarium information, expert advice on various pets and friendly one-on-one customer support.<br><br></p>
            </div>
            <div class="col col-sm-12 col-md-6" id="secondRow" style="padding-top: 5%;padding-bottom: 5%;padding-left: 5%;"><img id="image" src="{{asset("images/img/freshwaterAqautaics.jpg")}}" width="80%" height="100%" style="border-radius: 14px;"></div>
        </div>
        <div class="row" id="frow-1">
            <div class="col col-sm-12 col-md-6" id="image2" style="padding-top: 1%;padding-right: 28px;"><img id="image-2" src="{{asset("images/img/freshwaterAqautaics.jpg")}}" width="80%" height="100%" style="width: 100%;height: 100%;"></div>
            <div class="col col-sm-12 col-md-6">
                <p id="howStarted-3" style="font-size: 33px;font-weight: bold;margin-right: 11%;">Why Shop with us?</p>
                <p id="secondparagraph-3">Tired of not being able to find a suitable product for your needs, excessive costs for imported items or talking to misinformed retailers? Here at Fish Tank Co, we understand how important it is for us to be there for our customers. Knowledgeable and passionate animal hobbyists are standing by to answer your questions and to help pick out the right equipment with you by phone, whatsapp or email. We also have a wide variety of products specifically created for your needs in stock at all times. Not only will you get almost any item that you are searching for, our experts will readily provide you solutions to any problems you may be facing regarding your pets.<br><br><br></p>
            </div>
        </div>
    </div>

@endsection

