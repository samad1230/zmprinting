@extends('Home_page.master-layout')

@section('content')

    
     <section class="main-slider">
        <div class="main-slider-carousel owl-carousel owl-theme">
            @foreach ($slider as $row) 
            <div class="slide" style="background-image:url({{ URL::to(@$row->slider_image)}})">
                <div class="auto-container">
                    <div class="content clearfix">
                         <h2>{{@$row->slider_head}}</h2>
                        <div class="text">{{@$row->slider_details}}</div>
                        <div class="link-box">
                            <a href="#" class="theme-btn btn-style-one">Our Service</a> <a href="#" class="theme-btn btn-style-three">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="left-title">Printing & Design</div>
        <div class="mouse-btn-down scroll-to-target" data-target=".welcome-section"></div>
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
                        
                        <div class="about_text">
                            {{@$about[0]->aboutus}}
                        </div>
                        <a href="about.html" class="theme-btn btn-style-three">About More</a>
                        
                        <!-- Counter Box -->
                        <div class="counter-box">
                            
                            <div class="fact-counter">
                                <div class="row clearfix">
                           
                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <h4 class="counter-title">Projects</h4>
                                                <span class="count-text" data-speed="3000" data-stop="1200">0</span>+
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <h4 class="counter-title">Happy Clients</h4>
                                                <span class="count-text" data-speed="2500" data-stop="800">0</span>+
                                            </div>
                                        </div>
                                    </div>
                            
                                    <!--Column-->
                                    <div class="column counter-column col-lg-4 col-md-4 col-sm-12">
                                        <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                            <div class="count-outer count-box">
                                                <h4 class="counter-title">Satisfaction</h4>
                                                <span class="count-text" data-speed="2000" data-stop="99">0</span>+
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Welcome Section -->

    <section class="project-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title-inner">
                    <h2>Products</h2>
                </div>
            </div>
            <div class="four-item-carousel owl-carousel owl-theme">
                @foreach ($product as $pd_data)
                    <div class="project-block">
                        <div class="inner-box">
                            <div class="card">
                                <img src="{{ url($pd_data->pd_image) }}" alt="" />
                                <div class="card-body">
                                    <h5 class="card-title product_card_title">{{$pd_data->pd_name}}</h5> 
                                    <p><a href="#" class="btn btn-primary btn-sm custom_btn_color">View More</a></p>
                                </div> 
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="title-inner">
                    <div class="title">Welcome to</div>
                    <h2>Printing & Design Factory</h2>
                </div>
            </div>
            
            <div class="row clearfix">
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ 'media/common/printing.jpg' }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-layer"></div>
                            <div class="lower-layer"></div>
                            <h3><a href="oil-gas.html">Printing</a></h3>
                            <div class="text">Russia has become a major global player on my different levels in market....</div>
                        </div>
                    </div>
                </div>
                
                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ 'media/common/design.jpg' }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-layer"></div>
                            <div class="lower-layer"></div>
                            <h3><a href="#">Design</a></h3>
                            <div class="text">Provide a wide range of services related to the basic line of engineering.....</div>
                        </div>
                    </div>
                </div>
                
                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="#"><img src="{{ 'media/common/Embroidery.png' }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-layer"></div>
                            <div class="lower-layer"></div>
                            <h3><a href="#">Embroidery</a></h3>
                            <div class="text">All chemical research involves one or moor core activities such so projects.....</div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
    <!-- End Services Section -->
    

    <!-- Call To Action Section -->
    <section class="call-to-action-section" style="background-image:url({{ URL::to(@$slider[0]->slider_image)}});">
        <div class="auto-container">
            <h2>Get A <span class="theme_color">Solutions</span> For All <br> Printing</h2>
            <div class="text">We believe strongly that we can and must do things differently. <br> Our aim is to bring you news, perspectives.</div>
            <a href="contact.html" class="theme-btn btn-style-four">Contact Us</a>
        </div>
    </section>
    <!-- End Call To Action Section -->



    <section class="project-section">
        <div class="auto-container">
            <div class="sec-title">
                <br>
                <div class="title-inner">
                    <h2>Ongoing Product</h2>
                </div>
            </div>
            
            <div class="four-item-carousel owl-carousel owl-theme">
                @foreach ($ongoing as $go_data)
                {{-- <?php dd($go_data); ?> --}}
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="{{ url($go_data->pd_image) }}" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="{{ url($go_data->pd_image) }}" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="#"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="#">{{$go_data->pd_name}}</a></h3>
                                        <div class="category">{{$go_data->category_name}}</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                 @endforeach
            </div>
        </div>
    </section>
    <!-- End Project Section -->
    
    <!--Call To Action Section Two-->
    <section class="call-to-action-section-two" style="background-image:url({{ URL::to(@$slider[0]->slider_image)}})">
        <div class="auto-container">
            <div class="clearfix">
                
                <div class="pull-left">
                    <h2>We tailor this service to your business, your goals and your budget</h2>
                </div>
                <div class="pull-right">
                    <a href="contact.html" class="theme-btn btn-style-three">Success Track</a>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Call To Action Section Two -->
    
    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Title Column -->
                <div class="title-column col-lg-3 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title-inner">
                                <div class="title">Our team</div>
                                <h2>Expert Members</h2>
                            </div>
                        </div>
                        <div class="text">Suspendisse tempus, enim at convallis maximus, ex ante faucibus lorem, at rhoncus justo tellus at eros.</div>
                    </div>
                </div>
                
                <!-- Carousel Column -->
                <div class="carousel-column col-lg-9 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="team-carousel owl-carousel owl-theme">
                            @foreach ($member as $mrow)
                            <div class="team-block">
                                <div class="inner-box">
                                    <div class="image">
                                        <a href="#"><img src="{{ URL::to($mrow->image) }}"></a>
                                        <ul class="social-icons">
                                            <li>{{ $mrow->name }}</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="#">{{ $mrow->designation }}</a></h3>
                                        <div class="designation">{{ $mrow->email }}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Team Section -->
    
    
    <!-- Default Section -->
    <section class="default-section">
        <div class="outer-container">
            <div class="clearfix">
                
                <!-- News Column -->
                <div class="news-column">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title-inner">
                                <div class="title">Latest News and Artical</div>
                                <h2>Company Blogs</h2>
                            </div>
                        </div>
                        @foreach ($blog as $b_row)
                     
                            {{-- <?php dd($b_row); ?> --}}
                      
                            <div class="news-block">
                                <div class="inner-box">
                                    <div class="row clearfix">
                                        <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                            <div class="column-inner">
                                                <div class="image">
                                                    <img src="{{ URL::to($b_row->image) }}" alt="" />
                                                    <div class="image-layer" style="background-image:url({{ URL::to($b_row->image) }})"><a class="overlay-link" href="#"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                            <div class="column-inner">
                                                <ul class="post-info">
                                                    <li>{{ $b_row->created_at }}</li>
                                                    <li></li>
                                                </ul>
                                                <h3><a href="#">{{ $b_row->title }}</a></h3>
                                                <div class="text">{{ $b_row->blog_content }}</div>
                                            </div>
                                        </div>  
                                    </div> 
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column" style="background-image:url({{ URL::to(@$slider[1]->slider_image)}})">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title light">
                            <div class="title-inner">
                                <div class="title">information details</div>
                                <h2>Request a Quote</h2>
                            </div>
                        </div>
                        
                        <!-- Quote Form -->
                        <div class="quote-form">
                                
                            <!--Contact Form-->
                            <form method="post" action="">
                                @csrf
                                <div class="row clearfix">
                                
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="Your Name" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="email" name="email" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="address" placeholder="Address" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button class="theme-btn btn-style-two" type="submit" name="submit-form">Get A Quote</button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- End Default Section -->
    
    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">
            
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                     @foreach ($client as $row)
                         <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{ URL::to($row->client_logo) }}" alt=""></a></figure></li>
                     @endforeach
                </ul>
            </div>
            
        </div>
    </section>
@endsection


 