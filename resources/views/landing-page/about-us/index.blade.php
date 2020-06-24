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
@endsection