<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ReligionsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(UsersSeeder::class);
    }
}
