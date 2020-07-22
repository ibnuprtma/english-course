@extends('landing-page.master')

@section('content')
    <!-- bradcam_area  -->
    <div class="bradcam_area">
        <div class="bradcam_shap">
            <img src="{{ asset('assets/seogo/img/ilstrator/bradcam_ils.png')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                        <nav class="brad_cam_lists">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                              </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

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
@endsection