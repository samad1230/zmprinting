@extends('Home_page.master-layout')

@section('content')

    <section class="page-title d-none d-md-block" style="background-color: block">
        <div class="auto-container">
            <h2>About Us</h2>
            <ul class="page-breadcrumb">
                <li><a href="#">home</a></li>
                <li>About</li>
            </ul>
        </div>
    </section>    



<section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ URL::to(@$about[0]->images)}}">
                        </div>
                    </div>
                </div>

                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title-inner">
                                <div class="title">Welcome to</div>
                                <h2>ZM Printimg & Design</h2>
                            </div>
                        </div>
                        
                        <div class="abouttext">
                            {{@$about[0]->aboutus}}
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="call-to-action-section" style="background-image:url({{ URL::to(@$slider[0]->slider_image)}});">
        <div class="auto-container">
            <h2>Get A <span class="theme_color">Solutions</span> For All <br> Printing</h2>
            <div class="text">We believe strongly that we can and must do things differently. <br> Our aim is to bring you news, perspectives.</div>
            <a href="{{ route('main.contact') }}" class="theme-btn btn-style-four">Contact Us</a>
        </div>
    </section>


@endsection