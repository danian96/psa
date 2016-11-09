<?php

use Illuminate\Database\Seeder;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('careers')->insert([
            'code' => '4',
            'name' => 'dfadsfasd',
            'component_id' => '4',
            'faculty_id' => '1'
        ]);

        DB::table('careers')->insert([
            'code' => '2',
            'name' => 'asddsd',
            'component_id' => '4',
            'faculty_id' => '2'
        ]);
    }
}
