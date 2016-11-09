<?php

use Illuminate\Database\Seeder;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('components')->insert([
            'typeComponent' => 'MANAGEMENT'
        ]);

        DB::table('components')->insert([
            'typeComponent' => 'AREA'
        ]);

        DB::table('components')->insert([
            'typeComponent' => 'FACULTY'
        ]);

        DB::table('components')->insert([
            'typeComponent' => 'CAREER'
        ]);


    }
}
