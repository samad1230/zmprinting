@extends('Home_page.master-layout')

@section('content')

    <section class="page-title d-none d-md-block" style="background-color: block">
        <div class="auto-container">
            <h2>Contact Us</h2>
            <ul class="page-breadcrumb">
                <li><a href="#">home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>    
    <!-- Contact Form Section -->
    <section class="contact-form-section" style="background-color: block">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="title-inner">
                                <div class="title">Get in Touch</div>
                                <h2>Contact Us</h2>
                            </div>
                        </div>
                        <div class="text">Please fill out the request for quote form below and our expert team will get back to you shortly.</div>
                        
                        <!-- Default Form -->
                        <div class="default-form">
                            <form method="post" action="">
                                <div class="row clearfix">
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="username" placeholder="Name " required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="email" name="email" placeholder="Email " required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="subject" placeholder="Subject " required>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                        <input type="text" name="phone" placeholder="Phone " required>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <textarea name="message" placeholder="Message "></textarea>
                                    </div>
                                
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                        <button class="theme-btn btn-style-four" type="submit" name="submit-form">Send Now</button>
                                    </div>
                                    
                                </div>
                            </form>
                                
                        </div>
                        
                    </div>
                </div>
                
                <!-- Info Column -->
                <div class="info-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="title-inner">
                                <div class="title">Get it information</div>
                                <h2>Contact info</h2>
                            </div>
                        </div>
                        
                        <!-- Content Box -->
                        <div class="content-box">
                            <div class="text">For any kind of query, contact us with the details below.</div>
                            <ul class="list-style-three">
                                <li><span class="icon fa fa-phone"></span>{{ $profile[0]->contact }}</li>
                                <li><span class="icon fa fa-envelope"></span>{{ $profile[0]->email_one }}</li>
                                <li><span class="icon fa fa-map-marker"></span>{{ $profile[0]->address }}</li>
                                <li><span class="icon fa fa-clock-o"></span>Opening Hours : Thursday
                                - Sunday   9:00 am  to  5pm</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Contact Form Section -->


@endsection