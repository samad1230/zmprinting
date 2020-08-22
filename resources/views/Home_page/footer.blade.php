 <!--Main Footer-->
    <footer class="main-footer" style="background-image:url({{ URL::to(@$slider[1]->slider_image)}})">
    
        <div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    
                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget logo-widget">
                            <div class="logo logo-box">
                                <a href="index-2.html"><img src="{{ URL::to($profile[0]->logo) }}" alt="" /></a>
                                <h3>{{ $profile[0]->company_name }}</h3>
                            </div>
                            <div class="text"><a href="">{{ $about[0]->aboutus }}</a></div>

                            <ul class="list-style-one">
                                <li><span class="icon flaticon-map-1"></span>{{ $profile[0]->address }}</li>
                                <li><span class="icon flaticon-mail"></span>{{ $profile[0]->contact }}</li>
                                <li><span class="icon flaticon-mail"></span>{{ $profile[0]->email_one }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-column col-lg-1 col-md-6 col-sm-12">
                        
                    </div>  
                    
                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                            <h2>Usefull Links</h2>
                           
                                <ul class="list">
                                    <li><a href="{{ route('main.about') }}">About Us</a></li>
                                    <li><a href="#">Meet Our Team</a></li>
                                    <li><a href="#">Case Studies</a></li>
                                    <li><a href="{{ route('main.gallery') }}">Gallery</a></li>
                                    <li><a href="{{ route('main.client') }}">Our Client</a></li>
                                    <li><a href="{{ route('main.contact') }}">Contact Us</a></li>
                                </ul>
                            
                        </div>
                    </div> 
                    
                    
                    <!--Footer Column-->
                    <div class="footer-column col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget news-widget">
                            <h2>Recent Post</h2>
                            <div class="single-item-carousel owl-carousel owl-theme">
                               @foreach ($recentpost as $b_row)
                                <div class="slide">
                                    <div class="news-widget-block">
                                        <div class="widget-inner">
                                            <div class="image">
                                                <img src="{{ URL::to($b_row->image) }}" alt="" />
                                            </div>
                                            <div class="post-date">{{ $b_row->created_at }}</div>
                                            <h3><a href="#">{{ $b_row->title }}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                 @endforeach
                           </div>
                        </div>
                    </div>  
                    
                </div>
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    
                    <!-- Copyright Column -->
                    <div class="copyright-column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright"><a href="https://www.poweritbd.com">Power IT BD</a></div>
                    </div>
                    
                    <!-- Social Column -->
                    <div class="social-column col-lg-6 col-md-12 col-sm-12">
                        <ul class="footer-nav">
                            <li><a href="{{'https://www.facebook.com/'.$social[0]->social_url}}"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="{{ $social[1]->social_url}}"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-skype"></span></a></li>
                            <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<!-- Color Palate / Color Switcher -->

<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-paint-brush"></i>
    </div>
    <div class="color-palate-head">
        <h6>Choose Your Color</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="{{asset('Client_layouts/css/color-themes/default-theme.css')}}"></span>
            <span class="palate green-color" data-theme-file="{{asset('Client_layouts/css/color-themes/green-theme.css')}}"></span>
            <span class="palate blue-color" data-theme-file="{{asset('Client_layouts/css/color-themes/blue-theme.css')}}"></span>
            <span class="palate orange-color" data-theme-file="{{asset('Client_layouts/css/color-themes/orange-theme.css')}}"></span>
            <span class="palate purple-color" data-theme-file="{{asset('Client_layouts/css/color-themes/purple-theme.css')}}"></span>
            <span class="palate teal-color" data-theme-file="{{asset('Client_layouts/css/color-themes/teal-theme.css')}}"></span>
            <span class="palate brown-color" data-theme-file="{{asset('Client_layouts/css/color-themes/brown-theme.css')}}"></span>
            <span class="palate redd-color" data-theme-file="{{asset('Client_layouts/css/color-themes/redd-color.css')}}"></span>
            <span class="palate olive-color" data-theme-file="{{asset('Client_layouts/css/color-themes/olive-theme.css')}}"></span>
            <span class="palate lightblue-color" data-theme-file="{{asset('Client_layouts/css/color-themes/lightblue-color.css')}}"></span>
            <span class="palate pink-color" data-theme-file="{{asset('Client_layouts/css/color-themes/pink-theme.css')}}"></span>
            <span class="palate hotpink-color" data-theme-file="{{asset('Client_layouts/css/color-themes/hotpink-color.css')}}"></span>
        </div>
    </div>
    
    

</div>

<script src="{{asset('Client_layouts/js/jquery.js')}}"></script>
<script src="{{asset('Client_layouts/js/popper.min.js')}}"></script>
<script src="{{asset('Client_layouts/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Client_layouts/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('Client_layouts/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('Client_layouts/js/appear.js')}}"></script>
<script src="{{asset('Client_layouts/js/owl.js')}}"></script>
<script src="{{asset('Client_layouts/js/wow.js')}}"></script>
<script src="{{asset('Client_layouts/js/slick.js')}}"></script>

<script src="{{asset('Client_layouts/js/jquery-ui.js')}}"></script>
<script src="{{asset('Client_layouts/js/script.js')}}"></script>
<script src="{{asset('Client_layouts/js/color-settings.js')}}"></script>

</body>

</html>