<?php

use Illuminate\Database\Seeder;

class ReligionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('religions')->insert([
            [
                'name' => 'moslem',   
            ],
            [
                'name' => 'christian',   
            ],
            [
                'name' => 'buddha',   
            ],
            [
                'name' => 'hindu',   
            ],
            [
                'name' => 'konghucu',   
            ]
        ]);
    }
}
