<!-- header-start -->
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('/img/logo.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="{{ route('landing-page.pricing')}}">Pricing</a></li>
                                    <li><a href="{{ route('landing-page.about-us')}}">About Us</a></li>
                                    <li><a href="{{ route('landing-page.contact')}}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        @if (Route::has('login'))
                            @auth
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="/admin/dashboard">Entry Dashboard</a>
                                </div>
                            </div>
                        @else
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a  href="/register">Register</a>
                                    <a  href="/login" style="background:#ff008c;color:white">Login</a>
                                </div>
                            </div>
                            @endauth
                        @endif
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header-end -->