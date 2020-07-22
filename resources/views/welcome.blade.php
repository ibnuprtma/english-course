@extends('landing-page.master')

@section('content')

    <div class="shap_big_2 d-none d-lg-block">
        <img src="{{ asset('assets/seogo/img/ilstrator/body_shap_2.png')}}" alt="">
    </div>

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="shap_img_1 d-none d-lg-block">
            <img src="{{ asset('assets/seogo/img/ilstrator/body_shap_1.png')}}" alt="">
        </div>
        <div class="poly_img">
            <img src="{{ asset('assets/seogo/img/ilstrator/poly.png')}}" alt="">
        </div>
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-10 offset-xl-1">
                        <div class="slider_text text-center">
                            <div class="text">
                                <h3>
                                    BoostUp your English Skill <br>
                                    Be The Best for Yourself
                                </h3>

                                @if (Route::has('login'))
                                @auth    
                                    <a class="boxed-btn3" href="">Welcome,
                                        @if(isset(Auth::user()->student->firstname))
                                            {{Auth::user()->student->firstname}}
                                        @else
                                            admin
                                        @endif
                                    </a>
                                @else
                                    <a class="boxed-btn3" href="/login">Get Started</a>
                                @endauth
                                @endif
                            </div>
                            <div class="ilstrator_thumb">
                                <img src="{{ asset('assets/seogo/img/ilstrator/illustration.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/seo_1.svg')}}" alt="">
                        </div>
                        <h3>Grammer</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.</p>
                        {{-- <a href="#" class="boxed-btn3-text">Learn More</a> --}}
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/seo_2.svg')}}" alt="">
                        </div>
                        <h3>Speaking</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.</p>
                        {{-- <a href="#" class="boxed-btn3-text">Learn More</a> --}}
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/seo_3.svg')}}" alt="">
                        </div>
                        <h3>Listening</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing.</p>
                        {{-- <a href="#" class="boxed-btn3-text">Learn More</a> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--/ service_area  -->

    <!-- compapy_info  -->
    <div class="compapy_info">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-md-5">
                    <div class="man_thumb">
                        <img src="{{ asset('assets/seogo/img/ilstrator/man.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-7">
                    <div class="company_info">
                        <h3>We are an English Course that
                            specializes in upgrading skill</h3>
                            <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable.
                                Steem spirit temper too say adieus who direct esteem.</p>

                        <a href="/about-us" class="boxed-btn3">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ compapy_info  -->

    <!-- case_study_area  -->
    <div class="case_study_area case_bg_1">
        <div class="patrn_1 d-none d-lg-block">
            <img src="{{ asset('assets/seogo/img/pattern/patrn_1.png')}}" alt="">
        </div>
        <div class="patrn_2 d-none d-lg-block">
            <img src="{{ asset('assets/seogo/img/pattern/patrn.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-95 white_text">
                        <h3>Our Selected Case Study</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. It esteems <br>
                            luckily or picture placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="case_active owl-carousel">
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/seogo/img/case_study/1.png')}}" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">General English</a></h4>
                                <p>General</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/seogo/img/case_study/2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Business English</a></h4>
                                <p>Special</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/seogo/img/case_study/3.png')}}" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">IELTS</a></h4>
                                <p>Special</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/seogo/img/case_study/1.png')}}" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Vocabulary</a></h4>
                                <p>General</p>
                            </div>
                        </div>
                        <div class="single_study text-center">
                            <div class="thumb">
                                <a href="#">
                                    <img src="{{ asset('assets/seogo/img/case_study/2.png')}}" alt="">
                                </a>
                            </div>
                            <div class="subheading">
                                <h4><a href="#">Online Course</a></h4>
                                <p>General</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ case_study_area  -->

    <!-- accordion_area  -->
    <div class="accordion_area">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-xl-6 col-lg-6">
                    <div class="faq_ask">
                        <h3>Why Choose Us</h3>
                            <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Adieus who direct esteem <span>It esteems luckily?</span>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                            <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        Who direct esteem It esteems?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                            <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Duis consectetur feugiat auctor?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                            <div class="card-body">Esteem spirit temper too say adieus who direct esteem esteems luckily or picture placing drawing.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="accordion_thumb">
                        <img src="{{ asset('assets/seogo/img/banner/accordion.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ accordion_area  -->

    <!-- features_area  -->
    <div class="features_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center">
                        <h3>We have some awesome features <br>
                            to rank your english skill</h3>
                            <p>Esteem spirit temper too say adieus who direct esteem. It esteems luckily or <br> picture placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/feature_1.svg')}}" alt="">
                        </div>
                        <h4>EC Homestay</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/feature_2.svg')}}" alt="">
                        </div>
                        <h4>EC Languanges Abroad</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/feature_3.svg')}}" alt="">
                        </div>
                        <h4>Global Business</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/feature_4.svg')}}" alt="">
                        </div>
                        <h4>EC Academy</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/feature_5.svg')}}" alt="">
                        </div>
                        <h4>EC Universitas Preparation</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_feature">
                        <div class="icon">
                            <img src="{{ asset('assets/seogo/img/svg_icon/feature_6.svg')}}" alt="">
                        </div>
                        <h4>Business School</h4>
                        <p>Esteem spirit temper too say adieus who direct esteem.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ features_area  -->

    <!-- testimonial_area  -->
    <div class="testimonial_area ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="{{ asset('assets/seogo/img/testmonial/quote.svg')}}" alt="">
                                </div>
                                <p>
                                    I had a great time at The English Studio. Thanks to their friendly  <br> 
                                    teachers and helpful staff, I could find the best course to suit me. In just <br>
                                    three weeks I had the chance to fully <br> prepare for my exam and at the same time make <br>
                                    friends with people from all over the world. <br>This was a wonderful experience that helped me become more confident <br>
                                    in myself and I would be more than happy to repeat it all over again!
                                </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                            <img src="{{ asset('assets/seogo/img/testmonial/thumb.png')}}" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="{{ asset('assets/seogo/img/testmonial/quote.svg')}}" alt="">
                                </div>
                                <p>
                                    The teachers are great, they have excellent humour and make <br>
                                    the classes very funny. They were also very patient and <br>
                                    careful on my first days — always explaining in detail the topics and grammar.    
                                </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                            <img src="{{ asset('assets/seogo/img/testmonial/thumb.png')}}" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="single_testmonial text-center">
                                <div class="quote">
                                    <img src="{{ asset('assets/seogo/img/testmonial/quote.svg')}}" alt="">
                                </div>
                                <p>
                                    The English Studio is made up of friendly and helpful people. <br>
                                    The thing I most appreciated is the professors. They are very competent and kind. <br>
                                    In fact, they were ready to reply in detail to every question
                                </p>
                                <div class="testmonial_author">
                                    <div class="thumb">
                                            <img src="{{ asset('assets/seogo/img/testmonial/thumb.png')}}" alt="">
                                    </div>
                                    <h3>Robert Thomson</h3>
                                    <span>Business Owner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

@endsection