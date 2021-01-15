@extends('layouts.user_master')
@section('title','Medicine')
@section('content')
    <!--banner part start here-->
     <div class="banner-area owl-carousel h-500">
        <div class="single-slide bg h-500" style="background-image: url({{asset('public/user_asset')}}/images/appointment/appointment1.jpg);">
            <div class="container h-500">
                <div class="row h-500">
                    <div class="col-xl-12 h-500">
                        <div class="banner">
                            <h4>welcome</h4>
                            <h2>gain the beautiful</h2>
                            <a href="" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg h-500" style="background-image: url({{asset('public/user_asset')}}/images/appointment/appointment2.jpg);">
            <div class="container h-500">
                <div class="row h-500">
                    <div class="col-xl-12 h-500">
                        <div class="banner">
                            <h4>welcome</h4>
                            <h2>gain the beautiful</h2>
                            <a href="" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg h-500" style="background-image: url({{asset('public/user_asset')}}/images/banner/slide2.jpg);">
            <div class="container h-500">
                <div class="row h-500">
                    <div class="col-xl-12 h-500">
                        <div class="banner">
                            <h4>welcome</h4>
                            <h2>gain the beautiful</h2>
                            <a href="" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg h-500" style="background-image: url({{asset('public/user_asset')}}/images/banner/slide3.jpg);">
            <div class="container h-500">
                <div class="row h-500">
                    <div class="col-xl-12 h-500">
                        <div class="banner">
                            <h4>welcome</h4>
                            <h2>gain the beautiful</h2>
                            <a href="" class="box-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-area part end here-->
    <!--services-area start here-->
    <section class="service-part pt-70 pb-70">
        <div class="service-header">
            <h3>our services</h3>
            <div class="container">
                <div class="services">
                    <div class="row services">
                        <div class="col-xl-6">
                            <div class="single-service-part">
                                <h2>call for ambulance</h2>
                                <h4>contact here-> <a href="">0123456789</a></h4>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="single-service-part">
                                <img src="{{asset('public/user_asset')}}/images/otherServices/ambulance2.jpg" alt="">
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
            <div class="container pt-70 pb-70">
                <div class="services">
                    <div class="row services">
                        <div class="col-xl-6">
                            <div class="single-service-part">
                                <img src="{{asset('public/user_asset')}}/images/otherServices/blood.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="single-service-part">
                                <h2>look for blood donation</h2>
                                <h4>contact here-> <a href="">0123456789</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pt-70 pb-70">
                <div class="services">
                    <div class="row services">
                        <div class="col-xl-6">
                            <div class="single-service-part">
                                <h2>search for ICU vacancy</h2>
                                <h4>contact here-> <a href="">0123456789</a></h4>
                            </div>
                        </div>
                    <div class="col-xl-6">
                        <div class="single-service-part">
                            <img src="{{asset('public/user_asset')}}/images/otherServices/ICU.jpg" alt="">
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <div class="container pt-70 pb-70">
            <div class="services">
                <div class="row services">
                    <div class="col-xl-6">
                        <div class="single-service-part">
                            <img src="{{asset('public/user_asset')}}/images/otherServices/oxygen2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="single-service-part">
                            <h2>emergency need for oxygen supply</h2>
                            <h4>contact here-> <a href="">0123456789</a></h4>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        <div class="container pt-70 pb-70">
            <div class="services">
                <div class="row services">
                    <div class="col-xl-6">
                        <div class="single-service-part">
                            <h2>seek for primary care</h2>
                            <h4>contact here-> <a href="">0123456789</a></h4>
                        </div>
                    </div>
                        <div class="col-xl-6">
                            <div class="single-service-part">
                                <img src="{{asset('public/user_asset')}}/images/otherServices/primary.png" alt="">
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div>
    </section>
    <!--services-area end here-->
    @endsection