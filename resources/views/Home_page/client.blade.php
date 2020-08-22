@extends('Home_page.master-layout')

@section('content')

    <section class="page-title d-none d-md-block" style="background-color: block">
        <div class="auto-container">
            <h2>Client</h2>
            <ul class="page-breadcrumb">
                <li><a href="#">home</a></li>
                <li>Client</li>
            </ul>
        </div>
    </section>    


    <section id="clients" class="section-bg">
        <div class="container">
            <div class="sec-title">
                    <div class="title-inner">
                        <div class="title"></div>
                        <h2>Our Present buyer / Client</h2>
                    </div>
                </div>
            <div class="row no-gutters clients-wrap clearfix wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                @foreach ($client as $row)
                    <div class="col-lg-3 col-md-4 col-xs-6">
                        <div class="client-logo"> 
                            <img src="{{ URL::to($row->client_logo) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                 @endforeach
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