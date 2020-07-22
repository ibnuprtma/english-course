@extends('admin.master')

@section('content-head')
@if(Auth::user()->role->name == "admin")
    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Paid</h5>
                    <span class="h2 font-weight-bold mb-0">Rp.{{$paid}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Total</span>
                </p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Denied</h5>
                    <span class="h2 font-weight-bold mb-0">Rp.{{$denied}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-chart-pie"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                <span class="text-nowrap">Total</span>
                </p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Pending</h5>
                    <span class="h2 font-weight-bold mb-0">Rp.{{$pending}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                <span class="text-nowrap">Total</span>
                </p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Waiting</h5>
                    <span class="h2 font-weight-bold mb-0">Rp.{{$waiting}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                    <i class="fas fa-percent"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                <span class="text-nowrap">Total</span>
                </p>
            </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Intermediate</h5>
                    <span class="h2 font-weight-bold mb-0">{{$student_level_intermediate}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="fas fa-chart-bar"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                <span class="text-nowrap">Total</span>
                </p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Basic</h5>
                    <span class="h2 font-weight-bold mb-0">{{$student_level_basic}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-chart-pie"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                <span class="text-nowrap">Total</span>
                </p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Beginner</h5>
                    <span class="h2 font-weight-bold mb-0">{{$student_level_beginner}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                    <i class="fas fa-users"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                <span class="text-nowrap">Total</span>
                </p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
                <div class="row">
                <div class="col">
                    <h5 class="card-title text-uppercase text-muted mb-0">Advanced</h5>
                    <span class="h2 font-weight-bold mb-0">{{$student_level_advanced}}</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                    <i class="fas fa-percent"></i>
                    </div>
                </div>
                </div>
                <p class="mt-3 mb-0 text-muted text-sm">
                <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                <span class="text-nowrap">Total</span>
                </p>
            </div>
            </div>
        </div>
    </div>
@else
    <h4 class="alert-heading p-4 alert-success text-center">Selamat Datang, {{Auth::user()->student->firstname}} {{Auth::user()->student->lastname}}</h4>
@endif
@endsection

@section('content-body')
@if(Auth::user()->role->name == "admin")
    {{-- <div class="row">
        <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card bg-gradient-default shadow">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                <div class="col">
                    <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                    <h2 class="text-white mb-0">Sales value</h2>
                </div>
                <div class="col">
                    <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item mr-2 mr-md-0" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 10, 30, 15, 40, 20, 60, 60]}]}}' data-prefix="$" data-suffix="k">
                        <a href="#" class="nav-link py-2 px-3 active" data-toggle="tab">
                        <span class="d-none d-md-block">Month</span>
                        <span class="d-md-none">M</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="chart" data-target="#chart-sales" data-update='{"data":{"datasets":[{"data":[0, 20, 5, 25, 10, 30, 15, 40, 40]}]}}' data-prefix="$" data-suffix="k">
                        <a href="#" class="nav-link py-2 px-3" data-toggle="tab">
                        <span class="d-none d-md-block">Week</span>
                        <span class="d-md-none">W</span>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                <!-- Chart wrapper -->
                <canvas id="chart-sales" class="chart-canvas"></canvas>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card shadow">
            <div class="card-header bg-transparent">
                <div class="row align-items-center">
                <div class="col">
                    <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                    <h2 class="mb-0">Total orders</h2>
                </div>
                </div>
            </div>
            <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                <canvas id="chart-orders" class="chart-canvas"></canvas>
                </div>
            </div>
            </div>
        </div>
    </div> --}}
    <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
            <div class="card shadow">
            <div class="card-header border-0">
                <div class="row align-items-center">
                <div class="col">
                    <h3 class="mb-0">Student</h3>
                </div>
                <div class="col text-right">
                    <a href="/admin/student" class="btn btn-sm btn-primary">See all</a>
                </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->firstname }} {{$student->lastname}}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Total Students</h3>
                    </div>
                    <div class="col text-right">
                        <a href="#!" class="btn btn-sm btn-primary"></a>
                    </div>
                    </div>
                </div>
                <div class="p-auto m-auto">
                    <div class="p-5 m-5">
                        <h1 class="mb-0 text-center">{{$total_student}}</h1>
                        <br> <span>of Total Student</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection