<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimeMed || @yield('title')</title>
    <link rel="stylesheet" href="{{asset('public/user_asset')}}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/user_asset')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/user_asset')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('public/user_asset')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('public/user_asset')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('public/user_asset')}}/css/responsive.css">
</head>
<body>
<!--top part start here-->
@include('shared.user.header')

@yield('content')
<!--footer-area part start here-->
@include('shared.user.footer')
<!--footer-area part end here-->

    <script src="{{asset('public/user_asset')}}/js/jquery.min.js"></script>
    <script src="{{asset('public/user_asset')}}/js/popper.min.js"></script>
    <script src="{{asset('public/user_asset')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/user_asset')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('public/user_asset')}}/js/main.js"></script>
    @yield('script')
    <script>
        //############################# COOKIE GENERATE #############################
            @if (!Session::has('unique_session'))
            $(function () {
                $.get( "{{action('User\HomeController@gen_session')}}" );
            });
            @endif
        //#####################################################################################
    </script>
</body>
</html>