<?php

namespace App\Models;

use App\MasterModel;

class Payment extends MasterModel
{
    protected $table= 'payments';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'student_id',
        'payment',
        'description',
        'status',
        'image',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
