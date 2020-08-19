        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="" alt="ZM Printing" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li><a href="{{ route('home') }}"> <i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                        <li><a href="{{ route('aboutus') }}"><i class="fas fa-chart-bar"></i>About Us</a></li>
                        <li><a href="{{ route('sliderimage') }}"><i class="fas fa-chart-bar"></i>Slider</a></li>
                        <li><a href="{{ route('product') }}"><i class="fas fa-chart-bar"></i>Product</a></li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>Setting</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="#">Button</a>
                                </li>
                                <li>
                                    <a href="#">Badges</a>
                                </li>
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