<?php

use Illuminate\Database\Seeder;

class ManagementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('managements')->insert([
            'year' => 2017,
            'state' => 1,
        ]);
    }
}
