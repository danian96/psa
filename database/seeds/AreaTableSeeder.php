<?php

use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'code' => '100',
            'name' => 'Area 100',
            'component_id' => '1'
        ]);

        DB::table('areas')->insert([
            'code' => '200',
            'name' => 'Area 200',
            'component_id' => '1'
        ]);

        DB::table('areas')->insert([
            'code' => '300',
            'name' => 'Area 300',
            'component_id' => '1'
        ]);

        DB::table('areas')->insert([
            'code' => '400',
            'name' => 'Area 400',
            'component_id' => '1'
        ]);

        DB::table('areas')->insert([
            'code' => '501',
            'name' => 'Area 501',
            'component_id' => '1'
        ]);

        DB::table('areas')->insert([
            'code' => '600',
            'name' => 'Area 600',
            'component_id' => '1'
        ]);

    }
}
