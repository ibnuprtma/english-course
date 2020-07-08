<div class="modal fade" id="modalCreate-student" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">   
                <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header">
                            <div class="text-center mt-2 mb-3"><h3><i class="ni ni-briefcase-24 text-primary"></i> Create Student </h3></div>
                        </div>
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                                <small>Please fill the box with the name of student</small>
                            </div>
                            <form action="{{ route('admin.student.store')}}" method="POST">
                                {{csrf_field()}}
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
                                                    <select id="religion" class="form-control" name="religion_id">
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
                                            <label for="level">Package</label>
                                            <select id="level" class="form-control" name="level" required>
                                              <option value="beginner">Beginner Rp.120.000</option>
                                              <option value="basic">Basic Rp.420.000</option>
                                              <option value="intermediate">Intermediate Rp.620.000</option>
                                              <option value="advanced">Advanced Intermediate Rp.1.120.000<</option>
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
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary my-4">Create</button>
                                    <button type="button" class="btn btn-link text-red btn-danger ml-auto" data-dismiss="modal">Close</button> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>