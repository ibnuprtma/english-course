<?php

namespace App\Models;

use App\MasterModel;

class Student extends MasterModel
{
    protected $table= 'students';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'religion_id',
        'firstname',
        'lastname',
        'gender',
        'phone',
        'address',
        'birthdate',
        'level',
        'image',
    ];

    public function user()
    {
        return $this->hasMany(App\User::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class);
    }

}
