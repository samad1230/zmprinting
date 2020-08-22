        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left logo-box">
                    <a href="{{ url('/') }}" class="img-responsive"><img src="{{ URL::to($profile[0]->logo) }}" alt="" title=""></a>
                    <h3>{{ $profile[0]->company_name }}</h3>
                </div>
                

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent1">
                           <ul class="navigation clearfix">
                                <li class="current"><a href="{{ url('/') }}">Home</a></li>
                                <li class="dropdown"><a href="#">Products</a>
                                    <ul>
                                        @foreach ($category as $catarr)
                                            <li><a href="#">{{ $catarr->category_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="services.html">Management</a></li>
                                <li><a href="services.html">Factory</a></li>
                                <li><a href="services.html">Clients</a></li>
                                <li><a href="services.html">Gallery</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="contact.html">Visit Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>