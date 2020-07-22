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
                        <h3>Pricing</h3>
                        <p class="lead" style="color:black;">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->

    <div class="container">
        <div class="row text-center">
            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Beginner</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp.120.000 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>2x dalam seminggu</li>
                        <li>Include</li>
                        <li>Include</li>
                        <li>Include</li>
                        </ul>
                        <a href="/register" class="btn btn-lg btn-block" style="background:#ff008c;color:white">Continue</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Basic</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp.420.000 <small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>4x dalam seminggu</li>
                        <li>Include</li>
                        <li>Include</li>
                        <li>Include</li>
                        </ul>
                        <a href="/register" class="btn btn-lg btn-block" style="background:#ff008c;color:white">Continue</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Intermediate</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp.620.000<small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>4x dalam seminggu</li>
                        <li>Include</li>
                        <li>Include</li>
                        <li>Include</li>
                        </ul>
                        <a href="/register" class="btn btn-lg btn-block" style="background:#ff008c;color:white">Continue</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Advanced Intermediate</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title">Rp.1.120.000<small class="text-muted">/ mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                        <li>4x dalam seminggu</li>
                        <li>Include</li>
                        <li>Include</li>
                        <li>Include</li>
                        </ul>
                        <a href="/register" class="btn btn-lg btn-block" style="background:#ff008c;color:white">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection