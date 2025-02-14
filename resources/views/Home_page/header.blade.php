<!DOCTYPE html>
<html>


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>ZM Printing & Design</title>
<!-- Stylesheets -->
<link href="{{asset('Client_layouts/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('Client_layouts/css/style.css')}}" rel="stylesheet">
<link href="{{asset('Client_layouts/css/slick.css')}}" rel="stylesheet">
<link href="{{asset('Client_layouts/css/responsive.css')}}" rel="stylesheet">
<!--Color Switcher Mockup-->
<link href="{{asset('Client_layouts/css/color-switcher-design.css')}}" rel="stylesheet">
<!--Color Themes-->
<link id="theme-color-file" href="{{asset('Client_layouts/css/color-themes/default-theme.css')}}" rel="stylesheet">


<link rel="shortcut icon" type="image/x-icon" href="{{asset('Client_layouts/images/favicon.png')}}" />

<link rel="icon" href="{{asset('Client_layouts/images/favicon.png')}}" type="image/x-icon">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body class="hidden-bar-wrapper">

<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <header class="main-header">
        
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <ul>
                            <li><span class="icon fa fa-map-marker"></span> {{ $profile[0]->address }}</li>
                        </ul>
                    </div>
                    <!--Top Right-->
                    <div class="top-right">
                        <div class="timing">Email : {{ $profile[0]->email_one }}</div>
                        <!--Social Box-->
                        <ul class="social-box">
                            <li><a href="{{'https://www.facebook.com/'.$social[0]->social_url}}"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="{{ $social[1]->social_url}}"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-box">
                        <div class="logo"><a href="{{ url('/') }}"><img src="{{ URL::to($profile[0]->logo) }}" alt="" title=""></a>
                                
                        </div>
                        
                    </div>
                    
                    <div class="pull-right upper-right">
                        <div class="header-lower">
                            
                            <div class="nav-outer clearfix">
                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->      
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    
                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a href="{{ url('/') }}">Home</a>
                                            </li>
                                            <li class="dropdown"><a href="#">Products</a>
                                                <ul>
                                                    @foreach ($category as $catarr)
                                                        <li><a href="#">{{ $catarr->category_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="services.html">Management</a></li>
                                            <li><a href="services.html">Factory</a></li>
                                            <li><a href="{{ route('main.client') }}">Clients</a></li>
                                            <li><a href="{{ route('main.gallery') }}">Gallery</a></li>
                                            <li><a href="{{ route('main.contact') }}">Contact us</a></li>
                                            <li><a href="{{ route('main.about') }}">About US</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <div class="side-curve"></div>
                            </div>
                            
                        </div>
                        <!--End Header Lower-->
                        
                    </div>
                    
                </div>
                
            </div>
        </div>


        <!--End Header Upper-->