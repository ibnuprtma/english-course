<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $paid = Payment::select('payment')->where('status', 'Paid')->get()->sum('payment');
        $denied  = Payment::select('payment')->where('status', 'Denied')->get()->sum('payment');
        $waiting = Payment::select('payment')->where('status', 'Waiting')->get()->sum('payment');
        $pending = Payment::select('payment')->where('status', 'Pending')->get()->sum('payment');

        $student_level_intermediate = Student::select('id')->where('level', 'intermediate')->get()->count('level');
        $student_level_basic = Student::select('id')->where('level', 'basic')->get()->count('level');
        $student_level_beginner = Student::select('id')->where('level', 'beginner')->get()->count('level');
        $student_level_advanced = Student::select('id')->where('level', 'advanced')->get()->count('level');

        $total_student = Student::all()->count('id');

        $students = Student::all()->take(10);

        return view('admin.dashboard',[
            'paid' => $paid,
            'denied' => $denied,
            'waiting' => $waiting,
            'pending' => $pending,
            'student_level_intermediate' => $student_level_intermediate,
            'student_level_basic' => $student_level_basic,
            'student_level_beginner' => $student_level_beginner,
            'student_level_advanced' => $student_level_advanced,
            'total_student' => $total_student,
            'students' => $students,
        ]);
    }
}
