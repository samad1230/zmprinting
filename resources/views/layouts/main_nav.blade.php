        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ @$mainprofile[0]->logo }}" alt="ZM Printing" />
                    <h4>{{ @$mainprofile[0]->company_name }}</h4>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li><a href="{{ route('home') }}"> <i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                        <li><a href="{{ url('category') }}"><i class="fas fa-shopping-cart"></i>Category</a></li>
                        <li><a href="{{ url('product') }}"><i class="fas fa-cart-plus"></i>Product</a></li>
                        <li><a href="{{ url('client') }}"><i class="fas fa-users"></i>Clients</a></li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-industry"></i>Factory </a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('factory') }}"><i class="fas fa-chart-bar"></i> Factory Details </a>
                                </li>
                                <li>
                                    <a href="{{ url('machine') }}"><i class="fas fa-chart-bar"></i> Machine Details </a>
                                </li>
                                
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-cogs"></i>Setting</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="{{ url('profile') }}"><i class="fas fa-address-card"></i> Company Profile</a>
                                </li>
                                <li>
                                    <a href="{{ url('member') }}"><i class="fas fa-user"></i>Expert Member</a>
                                </li>
                                <li><a href="{{ url('blog') }}"><i class="fas fa-id-badge"></i>Blog Post</a></li>
                                <li><a href="{{ route('aboutus') }}"><i class="fas fa-chart-bar"></i>About Us</a></li>
                                <li><a href="{{ route('sliderimage') }}"><i class="fas fa-slideshare"></i>Slider</a></li>
                                <li><a href="{{ url('gallery') }}"><i class="fas fa-envira"></i>Gallery</a></li>
                                <li><a href="{{ url('social') }}"><i class="fas fa-facebook-square"></i>Social Link</a></li>
                            </ul>
                        </li>

                        <li>
                             <a href="{{ route('logout') }}" 
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>
                                    {{ __('Logout') }}
                                 </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                        </li>
                    </ul>
                </nav>
            </div>
        </aside>