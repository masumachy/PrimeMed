@extends('layouts.user_master')
@section('title','Dashboard')
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
                                  <li class="breadcrumb-item"><a href="{{action('User\HomeController@index')}}">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                  <li class="breadcrumb-item"><a href="{{action('User\HomeController@index')}}">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                  <li class="breadcrumb-item"><a href="{{action('User\HomeController@index')}}">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                                  <li class="breadcrumb-item"><a href="{{action('User\HomeController@index')}}">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--banner-area part end here-->
    <!--Cart-table area start here-->
    <section class="cart-table-area pt-30 pb-30">
        <div class="container">
            <div class="cart-table">
                <div class="row">
                    
                    <div class="col-xl-12 text-center">
                        <div class="all-cart">
                            <h2>your order</h2>
                            <div class="cart text-left">
                                <table class="table">
                                    <thead>
                                      <tr>
                                            <th scope="col">delivery address</th>
                                            <th scope="col">mobile no</th>
                                            <th scope="col">delivery date</th>
                                            <th scope="col">Total price</th>
                                            <th scope="col">payment method</th>
                                            <th scope="col">status</th>
                                            <th scope="col">details</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $item)
                                            <tr>
                                                <td>{{$item->address}}</td>  
                                                <td>{{$item->contactNo}}</td>
                                                <td>{{$item->deliveryDate}}</td>
                                                <td>{{money($item->paidAmount)}}</td>
                                                <td>{{$item->paymentType}}</td>
                                                <td>{{$item->orderStatus}}</td>
                                                <td><a  style="font-size: 12px" href="{{action('User\LoginController@invoice',['id'=>$item->id])}}" class="btn btn-info btn-sm">view</a>
                                                <a  style="font-size: 12px" href="" class="btn btn-danger">Del</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="all-appointment">
                            <h2>your appointment</h2>
                            <div class="cart text-left">
                                <table class="table">
                                    <thead>
                                      <tr>
                                            <th scope="col">dr name</th>
                                            <th scope="col">specialist</th>
                                            <th scope="col">status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appointment as $item)
                                            <tr>
                                                <td>{{$item->doctor['name']}}</td>
                                                <td>{{$item->doctor['specialist']}}</td>
                                                <td>{{$item->status}}</td>  
                                            </tr>
                                        @endforeach
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="all-services">
                            <h2>your services</h2>
                            <div class="cart text-left">
                                <table class="table">
                                    <thead>
                                      <tr>
                                            <th scope="col">Services</th>
                                            <th scope="col">Position</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($services as $item)
                                            <tr>
                                                <td>{{$item->services}}</td>
                                                <td>{{$item->adminSays}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--cart-table area end here-->
@endsection