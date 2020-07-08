<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeMail;
use App\Models\Payment;
use App\Models\Student;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index',['students' => $students]);
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
        $email = $request->email;
        $password = $request->firstname . 123;
        $payment = "BCA 123123123123 A.N Ibnu Pratama";

        if($request->level == "beginner"){
            $price = 120.000;
        }elseif($request->level == "basic"){
            $price = 420.000;
        }elseif($request->level == "intermediate"){
            $price = 620.000;
        }elseif($request->level == "advanced"){
            $price = 1120.000;
        }

        //create and find id
        $student_id = Student::create($request->all())->id;

        User::create([
            'role_id'      => 2,
            'student_id'  => $student_id,
            'username'     => '',
            'email'        => $email,
            'password'     => Hash::make($password),
        ]);

        Payment::create([
            'student_id'  => $student_id,
            'payment'     => $price."000",
            'description' => '',
            'status'     => 'Waiting',
            'image'     => ''
        ]);

        $details = [
            'firstname'=>$request->firstname,
            'email'=>$email,
            'password'=>$password,
            'payment'=>$payment,
            'level'=>$request->level,
            'price'=>$price
        ];

        \Mail::to($email)->send(new WelcomeMail($details));

        return redirect('/admin/student')->with('success', 'Congratulation, Please check your email for next information');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $students = Student::findOrFail($request->id);
        $users = User::where('student_id',$request->id);
        $users->delete();
        $students->delete();
        return redirect()->route('admin.student.index')->with(['success' => 'Data has been delete']);
    }
}
