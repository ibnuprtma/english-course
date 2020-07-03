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
                        <div class="row d-flex justify-content-center">
                            <div class="col-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="card-title px-3 pt-3 text-left">Register</h2>
                                        <p class="text-primary text-left alert" style="font-size:14px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum earum, expedita quod quibusdam deserunt voluptas numquam consequuntur autem hic ipsam reprehenderit. Cum quisquam dolore alias, aliquam sed ipsam? Iusto, quo.</p>
                                        <hr>
                                        <form method="POST" action="{{ route('landing-page.register-student') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group text-left">
                                                        <label for="firstname">First Name</label>
                                                        <input type="text" class="form-control" id="firstname" placeholder="Ibnu" name="firstname" required>
                                                    </div>
                                                    <div class="form-group text-left">
                                                        <label for="email">Email</label>
                                                        <input type="text" class="form-control" id="email" placeholder="pibnu86@mail.com" name="email" required>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group text-left">
                                                                <label for="phone">Phone</label>
                                                                <input type="text" class="form-control" id="phone" placeholder="0812312321" name="phone" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group text-left">
                                                                <label for="date">Birthdate</label>
                                                                <input type="date" class="form-control" id="date" name="birthdate">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group text-left">
                                                        <label for="lastname">Last Name</label>
                                                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Pratama">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group text-left">
                                                                <label for="gender">Gender</label>
                                                                <select id="gender" class="form-control" name="gender">
                                                                    <option value="male">Male</option>
                                                                    <option value="female">Female</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group text-left">
                                                                <label for="religion">Religion</label>
                                                                <select id="religion" class="form-control" name="religion">
                                                                    <option value="1">Moslem</option>
                                                                    <option value="2">christian</option>
                                                                    <option value="3">buddha</option>
                                                                    <option value="4">hindu</option>
                                                                    <option value="5">konghucu</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text-left">
                                                        <label for="level">Level</label>
                                                        <select id="level" class="form-control" required>
                                                          <option value="beginner">Beginner</option>
                                                          <option value="basic">Basic</option>
                                                          <option value="intermediate">Intermediate</option>
                                                          <option value="advanced">Advanced</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group text-left">
                                                        <label for="address">Address</label>
                                                        <input type="text" class="form-control" id="address"  name="address" placeholder="Jl. Kedung Klinter VII">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0 p-3">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary w-50">
                                                        Register
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /bradcam_area  -->
@endsection

