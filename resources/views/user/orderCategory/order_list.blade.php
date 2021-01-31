@extends('layouts.user_master')
@section('title','Order')
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
                                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
                                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
                                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
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
                                  <li class="breadcrumb-item active" aria-current="page">Shop</li>
                                </ol>
                            </nav>
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
                            <a href="{{action('User\OrderCategoryController@order_form')}}">form</a>
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
                <h3 class="text-center">Medicine <a href="{{action('User\OrderCategoryController@cart_table')}}"><i class="fas fa-cart-plus"></i> <span id="cart_item"></span></a></h3>
               <input type="search" id="searchItem" placeholder="Search a Medicine" data-url="{{action('User\OrderCategoryController@itemSearch')}}">
                
                <p class="text-center"> Drugs listed by brand generic name starting with the letter</p>
                <p class="medicine-group text-center">
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
                    <div class="col-xl-4">
                        <div class="side-bar text-left">
                            <ul id="categoryClick">
                                @foreach ($productcat as $item)
                                    <li><a href="{{action('User\OrderCategoryController@category_wise',['id' => $item->id])}}">{{$item->name}}</a></li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="row" id="productLoad">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--medicine-order-area part end here-->
    @endsection
    @section('script')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript">
        $(function(){
            contents("{{action('User\OrderCategoryController@all_product')}}");
            $('#categoryClick li a').click(function (e) {
                e.preventDefault();
                var url = $(this).attr('href');
                contents(url);
            });
            $('#searchItem').keyup(function (e) {
                e.preventDefault();
                var search = $(this).val();
                var url = $(this).data('url')+'?search='+search;
                if (search.length>0){
                    contents(url);
                }
                else {
                    contents("{{action('User\OrderCategoryController@all_product')}}");
                }
            });
 });
        function contents(url) {
            $.get(url, function(result){
                var showData = '';
                $.each(result, function( i, row ) {
    
    
                    showData += '<div class="col-xl-4"><div class="sub-order text-center"><img src="../public/uploads/product/'+row.imageName+'" alt=""><h4>name: <span>'+row.name+'</span></h4><h4>type: <span>'+row.group+'</span></h4><h4>dose: <span>'+row.dose+'</span></h4><h4>price: <span>TK. '+row.price+' (per pata)</span></h4><h4><a class="cart_minus" href="#" data-id="'+row.id+'" data-price="'+row.price+'"><i class="fas fa-minus"></i></a><span>0(pata)</span><a data-id="'+row.id+'" data-price="'+row.price+'" class="cart_plus" href=""><i class="fas fa-plus"></i></a></h4></div></div>'
                });
                $('#productLoad').html(showData);
                cart();
            });
        }

        function cart(){
                    $('.cart_plus').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');
                        var price = $(this).data('price');
                        add_cart(id, price);
                    });
                    $('.cart_minus').click(function(e){
                        e.preventDefault();
                        var id = $(this).data('id');
                        var price = $(this).data('price');
                        remove_cart(id, price);
                    });
        }
        function add_cart(id, price) {
            $.ajax({
                url: "{{action('User\CartController@add_cart')}}",
                type: 'GET',
                data: {productID:id, price:price},
                success:function(result){
                    console.log(result);
                    showcartintop();
                  //  temp_count();
                },
                error: function (jXHR, textStatus, errorThrown) {html("")}
            });
        }

        function remove_cart(id) {
            $.ajax({
                url: "{{action('User\CartController@remove_cart')}}",
                type: 'GET',
                data: {productID:id},
                success:function(result){
                    console.log(result);
                    showcartintop();
                   // temp_count();
                },
                error: function (jXHR, textStatus, errorThrown) {html("")}
            });
        }

        function showcartintop(){
            $.ajax({
                url : "{{action('User\CartController@get_temp_order')}}",
                type : 'GET',
                success : function(data){
                    if(data > 0){
                        $('#cart_item').html('[ '+data+' ]');
                    }else{
                        $('#cart_item').html('[ 0 ]');
                    }
                }
            });
        }
        showcartintop();
</script>
@endsection