@extends('frontend.master')

@section('title')
  Train eTicket portal
@endsection

@section('content')
    @include('frontend.include.slider')
    <!--SECTION2 ABOUT FROM HERE-->
        <div class="container" id="section2-about">
                <div class="row no-gutters text-center justify-content-between mt-xs-5 mt-lg-4">
                <div class="col-12 col-lg-5">

                        <div id="section2-titlebg" class="w-75 d-none d-lg-inline-block rounded-bottom"></div>
                        <p id="section2-title" class="h1 text-grey mt-5 mt-lg-auto" style="z-index:500; text-transform:uppercase;"><b>{{ __('msg.about') }}</b></p>
                    <br>
                    <div class="col-12 text-justify" style="color:rgb(13, 70, 6);">
                        {{ __('msg.aboutbody') }}
                    </div>
                    <br>
                    <img src="{{ asset('frontend/images/maintrain.jpg') }}" class="img-fluid img-thumbnail col-10 rounded text-center">
                </div>
                <div class="col-12 col-lg-5">

                    <div id="section2-titlebg" class="w-75 d-none d-lg-inline-block rounded-bottom"></div>
                    <p id="section2-title" class="h1 mt-5 mt-lg-auto" style="text-transform:uppercase;"><b>{{ __('msg.contact') }}</b></p>
                    <br>
                    <div class="col-12 text-justify" style="color:rgb(13, 70, 6);">
                        {{ __('msg.contactbody') }}<span class="text-muted">(davjegs2012@gmail.com)</span>{{ __('msg.contactbody2') }}
                    </div>
                    <br>
                    <img src="{{ asset('frontend/images/idu.jpg') }}" class="img-fluid img-thumbnail col-10 rounded text-center">
                </div>
                </div>
        </div>
    <!--SECTION2 ABOUT ENDS HERE-->

    <!--SECTION3 LEARN FROM HERE-->
        <div class="container-fluid mt-5" id="section3-learn">
            <div class="row no-gutters text-white justify-content-around" style="font-family: 'Open Sans Semibold';">
            <div class="col-12 col-md-5 text-center my-5">
                <p class="text-left">
                    {{ __('msg.trouble') }}
                </p>
                <div class="section3-btncontainer mb-4" style="height:20px;">
                <a href="faqs#faq-tickets" role="button" class="btn btn-lg col-8 mx-auto text-center" id="section3-btn">{{ __('msg.clickme') }}</a>
                </div>
            </div>
            <div class="col-12 col-md-5 text-center my-5">
                <p class="text-left">
                    {{ __('msg.clickhere') }}
                </p>
                <div class="section3-btncontainer mb-4" style="height:20px;">
                <a href="buy-ticket" role="button" class="btn btn-lg col-8 mx-auto text-center" id="section3-btn">{{ __('msg.buyticket') }}</a>
                </div>
            </div>
            </div>
        </div>
    <!--SECTION3 LEARN ENDS HERE-->
@endsection
