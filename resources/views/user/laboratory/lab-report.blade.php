@extends('layouts.user_master')
@section('title','Lab-Report-Delivery')
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
<!--form-area part start here-->
<section class="form-area pt-30 pb-30">
    <div class="container">
        <div class="form">
            <div class="row  form-instruction">
                <div class="col-xl-6">
                    <div class="form-left">
                        <span>welcome to report delivery page</span>
                        <p>only 60tk delivery charge in sylhet</p>
                        <p>if you give your full payment then just give delivery charge and take report.
                             But if you have due then please your due payment give by bkash and take report. 
                            BKash No is: 0178000000</p>
                    </div>
                    
                </div>
                <div class="col-xl-6">
                    <div class="single-form">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session()->has('masuma'))
                            <div class="alert alert-success">
                                {{ session()->get('masuma') }}
                            </div>
                        @endif
                        <form method="post" action="{{action('User\LaboratoryController@save')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Enter patient name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="name" name="patientName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">delivery address</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="please give your address" name="deliveryAddress">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">patient age</label>
                                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="patient age" name="age">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">phone number</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1"  placeholder="Phone Number" name="phoneNo">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Lab text Recipt</label>
                                <input type="file" class="form-control" id="exampleFormControlInput1"  placeholder="Phone Number" name="labTestRecipte">
                            </div>
                            <div class="form-group" style="text-align: center;">
                                <button type="submit" class="btn box-btn">Submit</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--form-area part end here-->
@endsection