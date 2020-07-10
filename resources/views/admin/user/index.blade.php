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
                <h3 class="mb-0">Users</h3>
                </div>
                <div class="col-4 text-right">
                <a href="" class="btn btn-sm btn-primary">Add User</a>
                </div>
            </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table id="user_table" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>
                                @if(isset($user->student->firstname))
                                    {{ $user->student->firstname }} {{$user->student->lastname}}
                                @else
                                    Admin
                                @endif
                            </td>
                            <td>{{ $user->role->name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" data-toggle="modal" 
                                            data-id="{{$user->id}}"
                                            data-username="{{$user->username}}" 
                                            data-role="{{$user->role_id}}" 
                                            data-email="{{$user->email}}" 
                                            data-target="#modalEdit-user">Edit
                                        </a>
                                        <a class="dropdown-item" data-toggle="modal" 
                                            data-id="{{$user->id}}"
                                            data-password="{{$user->password}}"
                                            data-target="#modalEditPassword-user">Edit Password
                                        </a>
                                        <a class="dropdown-item" data-toggle="modal" data-id="{{$user->id}}" data-target="#modalDelete-user">Delete</a>
                                    </div>
                                    @include('admin.user.modal.edit')
                                    @include('admin.user.modal.edit-password')
                                </div>
                            </td>
                            <div class="modal fade" id="modalDelete-user" tabindex="-1" role="dialog" aria-labelledby="modalDelete-user" aria-hidden="true">
                                <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                    <div class="modal-content bg-gradient-danger">
                                        
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        
                                        <div class="modal-body">
                                            <div class="py-3 text-center">
                                                <i class="ni ni-bell-55 ni-3x"></i>
                                                <h4 class="heading mt-4">You should read this!</h4>
                                                <p>when you delete your data, you will get a lost your data</p>
                                            </div>
                                        </div>
                                        
                                        <div class="modal-footer">
                                            <form action="{{ route('admin.user.destroy','delete')}}" method="POST">
                                                <input type="hidden" name="_method" value="Delete">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="id" id="id">
                                                <input type="submit" class="btn btn-white" value="Ok, Got it">
                                            </form>
                                            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('footer-scripts')
    <script type="text/javascript">
        let User = {
            init: function () {
                $('#modalDelete-user').on('show.bs.modal', function (event){
                    
                    var button = $(event.relatedTarget);
                    var id = button.data('id');

                    var modal = $(this);

                    modal.find('.modal-footer #id').val(id);

                });

                $('#user_table').DataTable({
                    "scrollY": 450,
                    "scrollX": true
                });

                $('#modalEdit-user').on('show.bs.modal', function (event){
                    
                    var button = $(event.relatedTarget);

                    var id = button.data('id');
                    var username = button.data('username');
                    var email = button.data('email');
                    var role = button.data('role');

                    var modal = $(this);

                    modal.find('.modal-body #id').val(id);
                    modal.find('.modal-body #username').val(username);
                    modal.find('.modal-body #email').val(email);
                    modal.find('.modal-body #role_id').val(role);
                });

                $('#modalEditPassword-user').on('show.bs.modal', function (event){
                    
                    var button = $(event.relatedTarget);

                    var id = button.data('id');
                    var password = button.data('password');

                    var modal = $(this);

                    modal.find('.modal-body #id').val(id);
                    modal.find('.modal-body #old_password').val(password);
                });
            }
        };

        jQuery(document).ready(function () {
            User.init();
        });
    </script>
@endpush