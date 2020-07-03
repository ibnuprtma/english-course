<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class RegisterStudentController extends Controller
{

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
            $price = "120.000";
        }elseif($request->level == "basic"){
            $price = "420.000";
        }elseif($request->level == "intermediate"){
            $price = "620.000";
        }elseif($request->level == "advanced"){
            $price = "1.120.000";
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

        $details = [
            'firstname'=>$request->firstname,
            'email'=>$email,
            'password'=>$password,
            'payment'=>$payment,
            'level'=>$request->level,
            'price'=>$price
        ];

        \Mail::to($email)->send(new WelcomeMail($details));

        return redirect('/register')->with('success', 'Congratulation, Please check your email for next information');
    }
}
