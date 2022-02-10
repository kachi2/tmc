<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,700,900' rel='stylesheet' type='text/css'>
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/library/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/library/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/library/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/md-font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style.css')}}">
      <title>@if(isset($title)) {{$title}} @else  TMC Institute @endif</title>
</head>
@include('partials.header')

@yield('content')

@include('partials.footer')
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/javascript" src="{{asset('/frontend/js/library/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/js/library/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/js/library/jquery.owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/js/library/jquery.appear.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/js/library/perfect-scrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/js/library/jquery.easing.min.js')}}"></script>
<script type="text/javascript" src="{{asset('/frontend/js/scripts.js')}}"></script>
</body>