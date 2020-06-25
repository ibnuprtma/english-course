<?php

use App\Models\Student;
use App\User;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'religion_id' => $faker-> randomElement([1,2,3,4]),
        'firstname' => $faker-> firstName(),
        'lastname' => $faker-> lastName(),
        'gender' => $faker-> randomElement(['man','woman']),
        'phone' => $faker-> phoneNumber(),
        'country' => 'indonesian',
        'city' => $faker-> city(),
        'postalcode' => $faker-> postcode(),
        'address' => $faker-> address(),
        'birthday' => $faker-> date($format = 'Y-m-d', $max = 'now'),
        'level' => $faker-> randomElement(['beginner','basic','intermediate','advanced']),
        'image' => NULL,
    ];
});