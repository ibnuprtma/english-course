<?php

use App\Models\Student;
use App\User;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'religion_id' => $faker-> randomElement([1,2,3,4]),
        'firstname' => $faker-> firstName(),
        'lastname' => $faker-> lastName(),
        'gender' => $faker-> randomElement(['male','female']),
        'phone' => $faker-> phoneNumber(),
        'address' => $faker-> address(),
        'birthdate' => $faker-> date($format = 'Y-m-d', $max = 'now'),
        'level' => $faker-> randomElement(['beginner','basic','intermediate','advanced']),
        'image' => NULL,
    ];
});