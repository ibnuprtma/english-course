<?php

namespace App\Models;

use App\MasterModel;

class Religion extends MasterModel
{
    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
