<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'role_id'      => '1',
            'student_id'  => NULL,
            'username'     => 'admin',
            'email'        => 'admin@gmail.com',
            'password'     => Hash::make('123'),
        ]);
        $user = User::create([
            'role_id'      => '2',
            'student_id'  => '1',
            'username'     => 'students',
            'email'        => 'students@gmail.com',
            'password'     => Hash::make('123'),
        ]);
        $user = User::create([
            'role_id'      => '2',
            'student_id'  => '2',
            'username'     => 'student',
            'email'        => 'student@gmail.com',
            'password'     => Hash::make('123'),
        ]);
    }
}
