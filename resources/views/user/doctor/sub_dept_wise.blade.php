@extends('layouts.user_master')
@section('title','Specialist')
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
    <div class="medicine-area  pb-70">
        <div class="container">
            <div class="medicine appointment">
                <h3 class="pb-30 pt-30">{{$sub_dept->sub_Dept_Name}}</h3>
                <div class="row">
                   @if (count($doctors) > 0)
                   @foreach ($doctors as $doctor)
                   <div class="col-xl-4">
                       <div class="single-medicine single-appointment">
                           <img src="{{asset('public/user_asset')}}/images/medicine/dr.jpg" alt="">
                           <p><span>name:</span>{{$doctor->name}}</p>
                           <p><span>degrees:</span>{{$doctor->degrees}}</p>
                           <p><span>check fee:</span>{{money($doctor->checkFee)}}</p>
                           <p><span>chamber details:</span>{{$doctor->chamberDetails}}</p>
                           <p><span>mobile no:</span>{{$doctor->mobileNo}}</p>
                           <p><span>time:</span>{{$doctor->time}}</p>
                           <a href="{{action('User\DoctorController@doctor_appointment',['id' => $doctor->id])}}"class="box-btn">get appointment</a>
                       </div>
                   </div>
                   @endforeach
                   @else
                   <h1>No Doctor Available</h1>
                   @endif
                </div>
            </div>
        </div>
    </div>
@endsection
