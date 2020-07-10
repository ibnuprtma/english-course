<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\PaymentMail;
use App\Models\Payment;
use App\User;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payment.index',['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $email = User::where('student_id',$request->id)->get();
        $payments = Payment::findOrFail($request->id);
        $payments->update($request->all());

        if($request->status=="Denied"){
            $status ="Danied";
            $details = [
                'email'=>$email[0]->email,
                'status'=>$status,
            ];
            \Mail::to($email[0]->email)->send(new PaymentMail($details));
        }else if($request->status=="Paid"){
            $status ="Paid";
            $details = [
                'email'=>$email[0]->email,
                'status'=>$status,
            ];
            \Mail::to($email[0]->email)->send(new PaymentMail($details));
        }

        return redirect('/admin/payment')->with('success','Data has been update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $payments = Payment::findOrFail($request->id);
        $payments->delete();
        return redirect()->route('admin.payment.index')->with(['success' => 'Data has been delete']);
    }
}
