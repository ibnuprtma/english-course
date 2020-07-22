@extends('admin.master')

@section('content-head')
@endsection

@section('content-body')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                    <h4 class="alert-heading">HI, {{Auth::user()->student->firstname}}</h4>
                </div>
            </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.profil.update',Auth::user()->student->id)}}" method="POST">
                    {{csrf_field()}}
                    {{ method_field('PUT')}}  
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group text-left">
                                <label for="firstname">First Name</label>
                                <input type="text" class="form-control" id="firstname" placeholder="Ibnu" name="firstname" value="{{Auth::user()->student->firstname}}" required>
                            </div>
                            <div class="form-group text-left">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="pibnu86@mail.com" name="email" value="{{Auth::user()->email}}"  required>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group text-left">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" placeholder="0812312321" name="phone" value="{{Auth::user()->student->phone}}"  required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group text-left">
                                        <label for="date">Birthdate</label>
                                        <input type="date" class="form-control" id="date" name="birthdate"  value="{{Auth::user()->student->birthdate}}" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group text-left">
                                <label for="lastname">Last Name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" value="{{Auth::user()->student->lastname}}"  placeholder="Pratama">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group text-left">
                                        <label for="gender">Gender</label>
                                        <select id="gender" class="form-control" name="gender">
                                            <option value="male" @if(Auth::user()->student->gender == 'male') selected @endif>Male</option>
                                            <option value="female" @if(Auth::user()->student->gender == 'female') selected @endif>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group text-left">
                                        <label for="religion">Religion</label>
                                        <select id="religion" class="form-control" name="religion_id">
                                            <option value="1" @if(Auth::user()->student->religion_id == '1') selected @endif>Moslem</option>
                                            <option value="2" @if(Auth::user()->student->religion_id == '2') selected @endif>christian</option>
                                            <option value="3" @if(Auth::user()->student->religion_id == '3') selected @endif>buddha</option>
                                            <option value="4" @if(Auth::user()->student->religion_id == '4') selected @endif>hindu</option>
                                            <option value="5" @if(Auth::user()->student->religion_id == '5') selected @endif>konghucu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <label for="level">Package</label>
                                <select id="level" class="form-control" name="level" disabled>
                                    <option value="beginner" @if(Auth::user()->student->level == 'beginner') selected @endif>Beginner Rp.120.000</option>
                                    <option value="basic"  @if(Auth::user()->student->level == 'basic') selected @endif>Basic Rp.420.000</option>
                                    <option value="intermediate"  @if(Auth::user()->student->level == 'intermediate') selected @endif>Intermediate Rp.620.000</option>
                                    <option value="advanced"  @if(Auth::user()->student->level == 'advanced') selected @endif>Advanced Intermediate Rp.1.120.000<</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group text-left">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address"  name="address"  value="{{Auth::user()->student->address}}" placeholder="Jl. Kedung Klinter VII">
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary my-4">Update</button>
                    </div>
                </form>
                <hr>
                <h3 class="mb-4 btn btn-danger">Ganti Password</h3>
                <form action="{{ route('admin.profil.student-password', Auth::user()->id)}}" method="POST">
                    {{csrf_field()}}
                    {{ method_field('PUT')}}  
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group text-left">
                                <label class="form-control-label" for="old_password">Old Password</label>
                                <input type="password" name="old_password" id="old_password" class="form-control form-control-alternative" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group text-left">
                                <label class="form-control-label" for="password">New Password</label>
                                <input type="password" name="password" id="password" class="form-control form-control-alternative" placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary my-4">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
