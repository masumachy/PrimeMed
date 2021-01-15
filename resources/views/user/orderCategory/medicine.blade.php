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
    <!--medicine-order-area part start here-->
    <section class="order-way-area pt-70 pb-70">
        <div class="container">
            <div class="order-way">
                <div class="row">
                    <div class="col-3">
                        <div class="order-by">
                            <i class="fas fa-globe-americas"></i>
                            <span>order online</span>
                            <a href="order-form.html">form</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-by">
                            <i class="fas fa-comments"></i>
                            <span>send an sms</span>
                            <a href="">01712345678</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-by">
                            <i class="fab fa-facebook"></i>
                            <span>order on facebook</span>
                            <a href="">inbox us</a>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="order-by">
                            <i class="fas fa-envelope"></i>
                            <span>send an email</span>
                            <a href="">primemed@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="order-category text-center pt-30">
                <h3>medicine</h3>
                <span>Drugs listed by brand generic name starting with the letter</span>
                <p class="medicine-group">
                    <a href="">a</a>
                    <a href="">b</a>
                    <a href="">c</a>
                    <a href="">d</a>
                    <a href="">e</a>
                    <a href="">f</a>
                    <a href="">g</a>
                    <a href="">h</a>
                    <a href="">i</a>
                    <a href="">j</a>
                    <a href="">k</a>
                    <a href="">l</a>
                    <a href="">m</a>
                    <a href="">n</a>
                    <a href="">o</a>
                    <a href="">p</a>
                    <a href="">q</a>
                    <a href="">r</a>
                    <a href="">s</a>
                    <a href="">t</a>
                    <a href="">u</a>
                    <a href="">v</a>
                    <a href="">w</a>
                    <a href="">x</a>
                    <a href="">y</a>
                    <a href="">z</a>
                </p>
                <div class="row">
                    <div class="col-3">
                        <div class="sub-order">
                            <img src="{{asset('public/user_asset')}}/images/order/medicine/antacid.png" alt="">
                            <h4>name: <span>antacid max</span></h4>
                            <h4>group: <span>antacid</span></h4>
                            <h4>type: <span>tablet</span></h4>
                            <h4>quantity: <span>200's per pack</span></h4>
                            <h4>pieces per pata: <span>10</span></h4>
                            <h4>dose: <span>30mg/tablet</span></h4>
                            <h4>price: <span>20tk per pata</span></h4>
                            <h4><a href=""><i class="fas fa-minus"></i></a><span>0(pata)</span><a href=""><i class="fas fa-plus"></i></a></h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="sub-order">
                            <img src="{{asset('public/user_asset')}}/images/order/medicine/antacid.png" alt="">
                            <h4>name: <span>antacid max</span></h4>
                            <h4>group: <span>antacid</span></h4>
                            <h4>type: <span>tablet</span></h4>
                            <h4>quantity: <span>200's per pack</span></h4>
                            <h4>pieces per pata: <span>10</span></h4>
                            <h4>dose: <span>30mg/tablet</span></h4>
                            <h4>price: <span>20tk per pata</span></h4>
                            <h4><a href=""><i class="fas fa-minus"></i></a><span>0(pata)</span><a href=""><i class="fas fa-plus"></i></a></h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="sub-order">
                            <img src="{{asset('public/user_asset')}}/images/order/medicine/antacid.png" alt="">
                            <h4>name: <span>antacid max</span></h4>
                            <h4>group: <span>antacid</span></h4>
                            <h4>type: <span>tablet</span></h4>
                            <h4>quantity: <span>200's per pack</span></h4>
                            <h4>pieces per pata: <span>10</span></h4>
                            <h4>dose: <span>30mg/tablet</span></h4>
                            <h4>price: <span>20tk per pata</span></h4>
                            <h4><a href=""><i class="fas fa-minus"></i></a><span>0(pata)</span><a href=""><i class="fas fa-plus"></i></a></h4>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="sub-order">
                            <img src="{{asset('public/user_asset')}}/images/order/medicine/antacid.png" alt="">
                            <h4>name: <span>antacid max</span></h4>
                            <h4>group: <span>antacid</span></h4>
                            <h4>type: <span>tablet</span></h4>
                            <h4>quantity: <span>200's per pack</span></h4>
                            <h4>pieces per pata: <span>10</span></h4>
                            <h4>dose: <span>30mg/tablet</span></h4>
                            <h4>price: <span>20tk per pata</span></h4>
                            <h4><a href=""><i class="fas fa-minus"></i></a><span>0(pata)</span><a href=""><i class="fas fa-plus"></i></a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--medicine-order-area part end here-->
    @endsection