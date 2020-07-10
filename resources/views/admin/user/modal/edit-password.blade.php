<div class="modal fade" id="modalEditPassword-user" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">   
            <div class="modal-body p-0">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header">
                        <div class="text-center mt-2 mb-3"><h3><i class="ni ni-briefcase-24 text-primary"></i> Edit User </h3></div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Please fill the box with the name of student</small>
                        </div>
                        <form action="{{ route('admin.user.change-password')}}" method="POST">
                            {{csrf_field()}}
                            {{ method_field('PUT')}}  
                            <input type="hidden" id="id" name="id">
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
                                <button type="button" class="btn btn-link text-red btn-danger ml-auto" data-dismiss="modal">Close</button> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>