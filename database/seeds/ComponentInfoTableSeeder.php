<?php

use Illuminate\Database\Seeder;

class ComponentInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('component_info')->insert([
            'date' => '2016-01-01',
            'state'=> '1',
            'component_id' => '1',
            'info_id'=> '1'
        ]);
        DB::table('component_info')->insert([
            'date' => '2016-01-01',
            'state'=> '1',
            'component_id' => '1',
            'info_id'=> '2'
        ]);
        DB::table('component_info')->insert([
            'date' => '2016-01-01',
            'state'=> '1',
            'component_id' => '1',
            'info_id'=> '3'
        ]);
        DB::table('component_info')->insert([
            'date' => '2016-01-01',
            'state'=> '1',
            'component_id' => '1',
            'info_id'=> '4'
        ]);

        DB::table('component_info')->insert([
            'date' => '2016-01-01',
            'state'=> '1',
            'component_id' => '1',
            'info_id'=> '5'
        ]);
        DB::table('component_info')->insert([
            'date' => '2016-01-01',
            'state'=> '1',
            'component_id' => '1',
            'info_id'=> '6'
        ]);
    }
}
