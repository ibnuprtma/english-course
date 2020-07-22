@extends('admin.master')

@section('content-head')
@endsection

@section('content-body')

@if(Auth::user()->student->payment->status != "Paid")
<div class="alert alert-secondary" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->student->firstname}}</h4>
    <h4 class="alert-heading p-4 alert-danger text-center">Status anda belum terkonfirmasi oleh admin, silahkan upload bukti pembayaran terlebih dahulu sebelum meng akses soal.</h4>
</div>
@else
    <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12 order-xl-1">
            <div class="card bg-secondary shadow">
                <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                    <h3 class="mb-0">HI, <b>{{Auth::user()->student->firstname}}</b> Test Your Skill</h3>
                    </div>
                </div>
                </div>
                <div class="card-body">
                    <div class="alert alert-secondary text-center" role="alert">
                        <h4 class="alert-heading mb-0">INGAT! Anda akan melaksanakan test untuk mengetahui kemampuan anda.</h4>
                        <p class="mb-0">
                            Hasil ini tidak akan terpengaruh untuk melakukan kursus disini, ini hanya sebatas mengetahui kemampuan pendidik.
                        </p>
                        <br>
                        <a href="" class="btn btn-primary text-white">Mulai Test</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
