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
            'type' => 'MANAGEMENT'
        ]);

        DB::table('components')->insert([
            'type' => 'AREA'
        ]);

        DB::table('components')->insert([
            'type' => 'FACULTY'
        ]);

        DB::table('components')->insert([
            'type' => 'CAREER'
        ]);


    }
}
