<?php

use Illuminate\Database\Seeder;

class ManagementTableSeeder extends Seeder
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
            'year' => '2016',
            'state' => '1',
            'name' => 'psa 2016-1',
            'period' => '1',
            'component_id' => '4'
        ]);
        DB::table('managements')->insert([
            'year' => '2016',
            'state' => '2',
            'name' => 'psa 2016-2',
            'period' => '1',
            'component_id' => '4'
        ]);
    }
}
