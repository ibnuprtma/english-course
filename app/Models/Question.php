<?php

namespace App\Models;

use App\MasterModel;

class Question extends MasterModel
{
    protected $table= 'questions';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'name',
        'type',
        'total_question',
    ];

    public function questiondetail()
    {
        return $this->hasMany(QuestionDetail::class);
    }

}
