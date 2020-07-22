@extends('admin.master')

@section('content-head')
@endsection

@section('content-body')

<div class="alert alert-secondary" role="alert">
    <h4 class="alert-heading">HI, {{Auth::user()->student->firstname}}</h4>
    @if($payment->status == "Waiting" || $payment->status == "Danied" || $payment->status == "Pending")
        @if($payment->status == "Danied")
        <h4 class="alert-heading p-4 alert-danger text-center">Status anda tidak diterima oleh admin, silahkan cek pembayaran anda atau anda bisa menghubungi kami. Terimakasih</h4>
        @elseif($payment->status == "Pending")
        <p class="alert-heading p-4 alert-danger text-center">Terimakasih sudah melakukan pembayaran, Harap menunggu konfirmasi dari bagian administrasi
        <br>Anda akan segera mendapatkan email balasan maksimal 2 x 24 jam</p>
        @endif
        <p>Silahkan melakukan pembayaran pendaftaran ke :</p>
        <hr>
        <h5 class="alert-heading">
            Jenis Bank : BCA <br>
            No. Rekening : 123123123123 A.N Ibnu Pratama <br>
            Nominal : Rp @if(isset($payment->payment)) {{$payment->payment}} @endif
        </h5>
        <hr>
        <h4 class="alert-heading mb-0">INGAT! Nominal harus sesuai dengan yang disebutkan diatas. Jika tidak, maka data tidak akan diproses.</h4>
        <p class="mb-0">
            Setelah melakukan pembayaran, upload bukti pembayaran dan mohon menunggu verifikasi oleh bagian administrasi maksimal 2 x 24 jam.
            <br> Contact Person : Imam Mahudi - <span><a target="_blank" href="https://wa.me/6281336532601">081336532601 (WA)</a></span>
        </p>
    @elseif($payment->status == "Paid")
        <h4 class="alert-heading p-4 alert-success text-center">Selamat pembayaran anda diterima oleh admin dan anda bisa melanjutkan ke tahap selanjutnya</h4>
    @endif
</div>

<div class="card">
    <div class="card-body">
        @if($payment->status == "Waiting")
        <form action="" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="pembayaran">Upload Bukti Pembayaran</label>
                        <input type="file" class="form-control-file" name="evidence">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control form-control-alternative" rows="3" name="description" placeholder="Keterangan"></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        @endif

        @if($payment->status != "Waiting")
        <div class="row">
            <div class="col-4">
                <b>Bukti</b><br><br>
                <img src="/uploads/payment/{{ $payment->image }}" alt="" srcset="" width="100%">
            </div>
            <div class="col-4">
                <b>Status Pembayaran</b><br><br>
                @if($payment->status == 'Pending')
                <button type="button" class="btn btn-danger btn-sm">Pending</button>
                @elseif($payment->status == 'Danied')
                <button type="button" class="btn btn-danger btn-sm">Danied</button>
                @elseif($payment->status == 'Paid')
                <button type="button" class="btn btn-success btn-sm">Success</button>
                @endif
            </div>
            <div class="col-4">
                <b>Waktu Submit</b><br><br>
                {{ $payment->created_at }}
            </div>
        </div>
        @endif

    </div>
</div>


@endsection
