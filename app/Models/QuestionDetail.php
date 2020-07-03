<?php

namespace App\Models;

use App\MasterModel;

class QuestionDetail extends MasterModel
{
    protected $table= 'question_details';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'question_id',
        'question',
        'information_answer',
        'correct_answer',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
