<?php

namespace App\Models;

use App\MasterModel;

class StudentResult extends MasterModel
{
    protected $table= 'student_results';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'student_id',
        'question_detail_id',
        'answer',
        'correct_answer',
        'score',
    ];
}
