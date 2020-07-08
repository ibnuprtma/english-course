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
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
            <div class="row align-items-center">
                <div class="col-8">
                <h3 class="mb-0">Students</h3>
                </div>
                <div class="col-4 text-right">
                    <a data-toggle="modal" data-target="#modalCreate-student" class="btn btn-sm btn-primary text-white">Add Student</a>
                    @include('admin.student.modal.create')
                </div>
            </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table id="student_table" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Full Name</th>
                            <th>Gender</th>
                            <th>Phone Number</th>
                            <th>Address</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                          $i = 1;  
                        @endphp
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student->firstname }} {{$student->lastname}}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->phone }}</td>
                            <td>{{ $student->address }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" data-toggle="modal" 
                                            data-id="{{$student->id}}" 
                                            data-firstname="{{$student->firstname}}" 
                                            data-lastname="{{$student->lastname}}" 
                                            data-gender="{{$student->gender}}" 
                                            data-phone="{{$student->phone}}"
                                            @if(isset($student->users->email))
                                                data-email="{{$student->users->email}}"
                                            @else 
                                                data-email="-"
                                            @endif 
                                            data-address="{{$student->address}}" 
                                            data-level="{{$student->level}}" 
                                            data-religion="{{$student->religion->name}}" 
                                            data-birthdate="{{$student->birthdate}}" 
                                            data-target="#modalView-student">
                                            View Detail
                                        </a>
                                        <a class="dropdown-item" href="{{ route('admin.student.edit',[$student->id])}}">Edit</a>
                                        <a class="dropdown-item" data-toggle="modal" data-id="{{$student->id}}" data-target="#modalDelete-student">Delete</a>
                                    </div>

                                    @include('admin.student.modal.detail')
                                </div>
                            </td>
                            <div class="modal fade" id="modalDelete-student" tabindex="-1" role="dialog" aria-labelledby="modalDelete-student" aria-hidden="true">
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
                                            <form action="{{ route('admin.student.destroy','delete')}}" method="POST">
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
        let Student = {
            init: function () {
                $('#modalDelete-student').on('show.bs.modal', function (event){
                    
                    var button = $(event.relatedTarget);
                    var id = button.data('id');

                    var modal = $(this);

                    modal.find('.modal-footer #id').val(id);

                });

                $('#student_table').DataTable({
                    "scrollY": 450,
                    "scrollX": true
                });

                $('#modalView-student').on('show.bs.modal', function (event){
                    
                    var button = $(event.relatedTarget);

                    var firstname = button.data('firstname');
                    var lastname = button.data('lastname');
                    var gender = button.data('gender');
                    var phone = button.data('phone');
                    var address = button.data('address');
                    var email = button.data('email');
                    var religion = button.data('religion');
                    var birthdate = button.data('birthdate');
                    var level = button.data('level');

                    var modal = $(this);

                    modal.find('.modal-body #firstname').val(firstname);
                    modal.find('.modal-body #lastname').val(lastname);
                    modal.find('.modal-body #gender').val(gender);
                    modal.find('.modal-body #phone').val(phone);
                    modal.find('.modal-body #address').val(address);
                    modal.find('.modal-body #email').val(email);
                    modal.find('.modal-body #religion').val(religion);
                    modal.find('.modal-body #date').val(birthdate);
                    modal.find('.modal-body #level').val(level);


                });
            }
        };

        jQuery(document).ready(function () {
            Student.init();
        });
    </script>
@endpush