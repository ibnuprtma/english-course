<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        //create and find id
        $lastid = Student::create($request->all())->id;

        $user = User::create([
            'role_id'      => 2,
            'student_id'  => $lastid,
            'username'     => '',
            'email'        => $email,
            'password'     => Hash::make($password),
        ]);
        return redirect('/')->with('success', 'Data telah terkirim');
    }
}
