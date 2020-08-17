@extends('Home_page.master-layout')

@section('content')

    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <img src="{{ URL::to($about[0]->images) }}">
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
                        <div class="about_text">{{$about[0]->aboutus}}</div>
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
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="card">
                            <img src="Client_layouts/images/resource/project-1.jpg" alt="" />
                            <div class="card-body">
                                <h5 class="card-title product_card_title">Base Ball Cap</h5> 
                                <p><a href="#" class="btn btn-primary btn-sm custom_btn_color">View More</a></p>
                            </div> 
                        </div>
                    </div>
                </div>
                
                <div class="project-block">
                    <div class="product_grid">
                        <div class="card">
                            <img src="Client_layouts/images/resource/project-1.jpg" class="card-img-top" alt="Base Ball Cap">
                            
                            <div class="card-body">
                                <h5 class="card-title product_card_title">Base Ball Cap</h5> 
                                <p><a href="products/baseball-cap/index.html" class="btn btn-primary btn-sm custom_btn_color">View More</a></p>
                            </div>
                        </div>
                    </div>
                </div>

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
            
                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="oil-gas.html"><img src="Client_layouts/images/resource/service-1.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-layer"></div>
                            <div class="lower-layer"></div>
                            <h3><a href="oil-gas.html">Oil and Gass Energy</a></h3>
                            <div class="text">Russia has become a major global player on my different levels in market....</div>
                        </div>
                    </div>
                </div>
                
                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="civil.html"><img src="Client_layouts/images/resource/service-2.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-layer"></div>
                            <div class="lower-layer"></div>
                            <h3><a href="civil.html">Mechanical Engineering</a></h3>
                            <div class="text">Provide a wide range of services related to the basic line of engineering.....</div>
                        </div>
                    </div>
                </div>
                
                <!-- Services Block -->
                <div class="services-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image">
                            <a href="chemical-research.html"><img src="Client_layouts/images/resource/service-3.jpg" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <div class="upper-layer"></div>
                            <div class="lower-layer"></div>
                            <h3><a href="chemical-research.html">Chemical Research</a></h3>
                            <div class="text">All chemical research involves one or moor core activities such so projects.....</div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="row clearfix">
                
                    <!-- Services Block Two -->
                    <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="Client_layouts/images/resource/service-4.jpg" alt="" />
                            </div>
                            <h3><a href="agricultural-research.html">Printing</a></h3>
                            <div class="text">Modern society consumes large amounts of fuel,</div>
                        </div>
                    </div>
                    
                    <!-- Services Block Two -->
                    <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image">
                                <img src="Client_layouts/images/resource/service-5.jpg" alt="" />
                            </div>
                            <h3><a href="agricultural-research.html">Design</a></h3>
                            <div class="text">Agriculrure processing is the transformation ...</div>
                        </div>
                    </div>  
                    
                    <!-- Services Block Two -->
                    <div class="services-block-two col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image">
                                <img src="Client_layouts/images/resource/service-6.jpg" alt="" />
                            </div>
                            <h3><a href="agricultural-research.html">Screen Print</a></h3>
                            <div class="text">Modern society consumes large amounts of fuel, </div>
                        </div>
                    </div>
                
                </div>  
            
        </div>
    </section>
    <!-- End Services Section -->
    
    <!-- Call To Action Section -->
    <section class="call-to-action-section" style="background-image:url(Client_layouts/images/background/1.jpg);">
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
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Client_layouts/images/resource/project-1.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="Client_layouts/images/resource/project-1.jpg" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="team.html"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="team.html">Pre Construction</a></h3>
                                        <div class="category">Agriculture, Chemical</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Client_layouts/images/resource/project-2.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="Client_layouts/images/resource/project-2.jpg" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="team.html"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="team.html">Pre Construction</a></h3>
                                        <div class="category">Agriculture, Chemical</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Client_layouts/images/resource/project-3.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="Client_layouts/images/resource/project-3.jpg" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="team.html"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="team.html">Pre Construction</a></h3>
                                        <div class="category">Agriculture, Chemical</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Client_layouts/images/resource/project-4.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="Client_layouts/images/resource/project-4.jpg" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="team.html"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="team.html">Pre Construction</a></h3>
                                        <div class="category">Agriculture, Chemical</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Client_layouts/images/resource/project-1.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="Client_layouts/images/resource/project-1.jpg" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="team.html"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="team.html">Pre Construction</a></h3>
                                        <div class="category">Agriculture, Chemical</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Client_layouts/images/resource/project-2.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="Client_layouts/images/resource/project-2.jpg" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="team.html"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="team.html">Pre Construction</a></h3>
                                        <div class="category">Agriculture, Chemical</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Client_layouts/images/resource/project-3.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="Client_layouts/images/resource/project-3.jpg" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="team.html"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="team.html">Pre Construction</a></h3>
                                        <div class="category">Agriculture, Chemical</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image">
                            <img src="Client_layouts/images/resource/project-4.jpg" alt="" />
                            <!-- Overlay Box -->
                            <div class="overlay-box">
                                <div class="icons">
                                    <a class="plus" href="Client_layouts/images/resource/project-4.jpg" data-fancybox="gallery-1" data-caption=""><span class="flaticon-plus-symbol"></span></a>
                                    <a class="link" href="team.html"><span class="icon flaticon-link"></span></a>
                                </div>
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <h3><a href="team.html">Pre Construction</a></h3>
                                        <div class="category">Agriculture, Chemical</div>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    <!-- End Project Section -->
    
    <!--Call To Action Section Two-->
    <section class="call-to-action-section-two" style="background-image:url(Client_layouts/images/background/1.jpg)">
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
                            
                            <!--Team Block-->
                            <div class="team-block">
                                <div class="inner-box">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="image">
                                        <a href="team.html"><img src="Client_layouts/images/resource/team-1.png" alt="" /></a>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="team.html">Monica Wagase</a></h3>
                                        <div class="designation">Camical officer</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Team Block-->
                            <div class="team-block">
                                <div class="inner-box">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="image">
                                        <a href="team.html"><img src="Client_layouts/images/resource/team-2.png" alt="" /></a>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="team.html">Monica Wagase</a></h3>
                                        <div class="designation">Camical officer</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Team Block-->
                            <div class="team-block">
                                <div class="inner-box">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="image">
                                        <a href="team.html"><img src="Client_layouts/images/resource/team-3.png" alt="" /></a>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="team.html">Monica Wagase</a></h3>
                                        <div class="designation">Camical officer</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Team Block-->
                            <div class="team-block">
                                <div class="inner-box">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="image">
                                        <a href="team.html"><img src="Client_layouts/images/resource/team-1.png" alt="" /></a>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="team.html">Monica Wagase</a></h3>
                                        <div class="designation">Camical officer</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Team Block-->
                            <div class="team-block">
                                <div class="inner-box">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="image">
                                        <a href="team.html"><img src="Client_layouts/images/resource/team-2.png" alt="" /></a>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="team.html">Monica Wagase</a></h3>
                                        <div class="designation">Camical officer</div>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Team Block-->
                            <div class="team-block">
                                <div class="inner-box">
                                    <div class="border-one"></div>
                                    <div class="border-two"></div>
                                    <div class="image">
                                        <a href="team.html"><img src="Client_layouts/images/resource/team-3.png" alt="" /></a>
                                        <ul class="social-icons">
                                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="lower-box">
                                        <h3><a href="team.html">Monica Wagase</a></h3>
                                        <div class="designation">Camical officer</div>
                                    </div>
                                </div>
                            </div>
                            
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
                        
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="column-inner">
                                            <div class="image">
                                                <img src="Client_layouts/images/resource/news-1.jpg" alt="" />
                                                <div class="image-layer" style="background-image:url(Client_layouts/images/resource/news-1.jpg)"><a class="overlay-link" href="blog-single.html"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="column-inner">
                                            <ul class="post-info">
                                                <li>24th August 2019</li>
                                                <li>Machnical Engineering</li>
                                            </ul>
                                            <h3><a href="blog-single.html">Collaboration through advanced touch base UI</a></h3>
                                            <div class="text">Baseline the procedure and samepage your department. Golden goose. Social currency. Those options are already baked in with this model run it up the flagpole.</div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        
                        <!-- News Block -->
                        <div class="news-block">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="column-inner">
                                            <div class="image">
                                                <img src="Client_layouts/images/resource/news-2.jpg" alt="" />
                                                <div class="image-layer" style="background-image:url(Client_layouts/images/resource/news-1.jpg)"><a class="overlay-link" href="blog-single.html"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content Column -->
                                    <div class="content-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="column-inner">
                                            <ul class="post-info">
                                                <li>24th August 2019</li>
                                                <li>Machnical Engineering</li>
                                            </ul>
                                            <h3><a href="blog-single.html">Lean into that problem proceduralize.</a></h3>
                                            <div class="text">Baseline the procedure and samepage your department. Golden goose. Social currency. Those options are already baked in with this model run it up the flagpole.</div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- Form Column -->
                <div class="form-column" style="background-image:url(Client_layouts/images/background/2.jpg)">
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
                            <form method="post" action="http://ary-themes.com/html/buliten/contact.html">
                                <div class="row clearfix">
                                
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="username" placeholder="Your Name" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="email" placeholder="Email" required>
                                    </div>
                                    
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                    
                                    <!--Form Group-->
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <select class="custom-select-box">
                                            <option>Service Required</option>
                                            <option>Service One</option>
                                            <option>Service Two</option>
                                            <option>Service Three</option>
                                            <option>Service Four</option>
                                        </select>
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
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="Client_layouts/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="Client_layouts/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="Client_layouts/images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="Client_layouts/images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="Client_layouts/images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="Client_layouts/images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="Client_layouts/images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="Client_layouts/images/clients/3.png" alt=""></a></figure></li>
                </ul>
            </div>
            
        </div>
    </section>
@endsection