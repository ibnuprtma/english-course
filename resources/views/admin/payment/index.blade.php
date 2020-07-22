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
                <h3 class="mb-0">Payments</h3>
                </div>
                <div class="col-4 text-right">
                </div>
            </div>
            </div>
            <div class="card-body">
            <div class="table-responsive">
                <table id="payment_table" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Payment</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                        <tr>
                            <td>
                                @if(isset($payment->student->firstname))
                                    {{ $payment->student->firstname }} {{ $payment->student->lastname }}
                                @endif
                            </td>
                            <td>{{ $payment->payment }}</td>
                            <td>
                                @if(isset($payment->description))
                                    {{ $payment->description }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>   
                                @if($payment->status == 'Pending')
                                <button type="button" class="btn btn-danger btn-sm">Pending</button>
                                @elseif($payment->status == 'Denied')
                                <button type="button" class="btn btn-danger btn-sm">Denied</button>
                                @elseif($payment->status == 'Paid')
                                <button type="button" class="btn btn-success btn-sm">Success</button>
                                @elseif($payment->status == 'Waiting')
                                <button type="button" class="btn btn-primary btn-sm">Waiting</button>
                                @endif
                            </td>
                            <td><img src="/uploads/payment/{{ $payment->image }}" alt="" srcset="" width="100%"></td>
                            <td>{{ $payment->created_at }}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" data-toggle="modal" data-id="{{$payment->id}}" data-target="#modalApprove-payment">Action</a>
                                        {{-- <a class="dropdown-item" data-toggle="modal" data-id="{{$payment->id}}" data-target="#modalDelete-payment">Delete</a> --}}
                                    </div>
                                </div>
                            </td>
                            {{-- <div class="modal fade" id="modalDelete-payment" tabindex="-1" role="dialog" aria-labelledby="modalDelete-payment" aria-hidden="true">
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
                                            <form action="{{ route('admin.payment.destroy','delete')}}" method="POST">
                                                <input type="hidden" name="_method" value="Delete">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="hidden" name="id" id="id">
                                                <input type="submit" class="btn btn-white" value="Ok, Got it">
                                            </form>
                                            <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
                                        </div>
                                        
                                    </div>
                                </div>
                            </div> --}}
                            <div class="modal fade" id="modalApprove-payment" tabindex="-1" role="dialog" aria-labelledby="modalApprove-payment" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-" role="document">
                                    <div class="modal-content">
                                        <form action="{{ route('admin.payment.update','update')}}" method="POST">
                                            {{csrf_field()}}
                                            {{ method_field('PUT')}}  
                                            <input type="hidden" id="id" name="id">
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
                                                    <p>Are You Sure to change the status ?</p>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <select id="status" class="form-control" name="status">
                                                                    <option value="Waiting">Waiting</option>
                                                                    <option value="Pending">Pending</option>
                                                                    <option value="Denied">Denied</option>
                                                                    <option value="Paid">Paid</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-primary" value="Ok, Got it">
                                                <button type="button" class="btn btn-danger btn-link text-black ml-auto" data-dismiss="modal">Close</button> 
                                            </div>
                                        </form>
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
        let Payment = {
            init: function () {
                $('#modalDelete-payment').on('show.bs.modal', function (event){
                    
                    var button = $(event.relatedTarget);
                    var id = button.data('id');

                    var modal = $(this);

                    modal.find('.modal-footer #id').val(id);

                });

                $('#payment_table').DataTable({
                    "scrollY": 450,
                    "scrollX": true
                });

                $('#modalApprove-payment').on('show.bs.modal', function (event){
                    
                    var button = $(event.relatedTarget);
                    var id = button.data('id');

                    var modal = $(this);

                    modal.find('.modal-content #id').val(id);

                });
            }
        };

        jQuery(document).ready(function () {
            Payment.init();
        });
    </script>
@endpush