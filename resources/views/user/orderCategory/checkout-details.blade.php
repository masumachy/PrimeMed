@extends('layouts.user_master')
@section('title','CheckOut')
@section('content')
    <!--banner part start here-->
     <div class="banner-area owl-carousel h-300">
        <div class="single-slide bg h-300" style="background-image: url({{asset('public/user_asset')}}/images/appointment/appointment1.jpg);">
            <div class="container h-300">
                <div class="row h-300">
                    <div class="col-xl-12 h-300">
                        <div class="banner">
                            <!--<h4>welcome</h4>
                            <h2>gain the beautiful</h2>
                            <a href="" class="box-btn">read more</a>-->
                            <h4>welcome</h4>
                            <nav aria-label="breadcrumb" class="text-center">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">CheckOut</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg h-300" style="background-image: url({{asset('public/user_asset')}}/images/appointment/appointment2.jpg);">
            <div class="container h-300">
                <div class="row h-300">
                    <div class="col-xl-12 h-300">
                        <div class="banner">
                            <h4>welcome</h4>
                            <nav aria-label="breadcrumb" class="text-center">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">CheckOut</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg h-300" style="background-image: url({{asset('public/user_asset')}}/images/banner/slide2.jpg);">
            <div class="container h-300">
                <div class="row h-300">
                    <div class="col-xl-12 h-300">
                        <div class="banner">
                            <h4>welcome</h4>
                            <nav aria-label="breadcrumb" class="text-center">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">CheckOut</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide bg h-300" style="background-image: url({{asset('public/user_asset')}}/images/banner/slide3.jpg);">
            <div class="container h-300">
                <div class="row h-300">
                    <div class="col-xl-12 h-300">
                        <div class="banner">
                            <h4>welcome</h4>
                            <nav aria-label="breadcrumb" class="text-center">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item"><a href="#">Shop</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">CheckOut</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-area part end here-->
    <!--checkout-details area start here-->
    <section class="checkout-detaile-area pt-30 pb-30">
        <div class="container">
            <div class="checkout-details">
                <h3 class="text-center">CheckOut Details</h3>
                <form action="">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="checkout-form-left">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Delivery Address:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="" placeholder="Delivery Address Here"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Order Instructions:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="" id="" placeholder="Before Delivery Please Call Me First"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Contact No:</label>
                                    <input class="form-control" type="number" placeholder="Your Mobile Number">
                                </div>  
                                <div class="row">
                                    <div class="col-xl-12">
                                        
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="checkout-form-right">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Preferred Delivery Date:</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="19/1/2021">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Preferred Delivery Time:</label>
                                    <select class="form-select form-control" aria-label="Default select example">
                                        <option selected>Open this select menu</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <label for="exampleFormControlInput1" class="form-label">Delivery charge <span>60 Taka!!</span></label>
                            
                                <div class="row">
                                    <div class="col-xl-12">
                                        
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="box">
                                <h2>cart total</h2>
                                @php
                                    $sub_total = 0;
                                @endphp
                            @foreach($carts as $row)
                                @php
                                    $sub_total += ($row->price * $row->quantity);
                                @endphp
                            @endforeach
                                    <label class="form-check-label" for="inlineRadio1">subtotal</label>
                                    <label class="form-check-label" for="inlineRadio2">{{money($sub_total)}}</label>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="box">
                                <h2>payment method</h2>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">cash on Delivery</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">bkash</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>   
            </div>
        </div>
    </section>
    <!--checkout-details area end here-->
@endsection