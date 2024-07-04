<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>@if(isset($breadcrum)){{$breadcrum}} @else {{$settings->site_name}} @endif </title>
<!-- Stylesheets -->
<link rel="stylesheet"
href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
<link rel="stylesheet" href="{{asset('assets/css/libraries.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

<link rel="shortcut icon" href="{{asset('assets/fav.png')}}" type="image/x-icon">

</head>
<body>
    <div class="wrapper">
      <div class="preloader">
        <div class="loading"><span></span><span></span><span></span><span></span></div>
      </div><!-- /.preloader -->
   @include('layouts.header')
    @yield('contents')

<!--== Start Footer Area Wrapper ==-->
@include('layouts.footer')
<!-- End Off Canvas Menu Wrapper -->
