<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
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
}
