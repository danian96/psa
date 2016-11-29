<?php

use Illuminate\Database\Seeder;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('areas')->insert([
            'id'    =>      100,
            'component_id' => '2',
            'code' => 'A-100',
            'name' => 'TECNOLOGIA'
        ]);

        DB::table('areas')->insert([
            'id'    =>      200,
            'component_id' => '3',
            'code' => 'A-200',
            'name' => 'BIO-AGROPECUARIA'
        ]);

        DB::table('areas')->insert([
            'id'    =>      300,
            'component_id' => '4',
            'code' => 'A-300',
            'name' => 'ECONOMICAS'
        ]);

        DB::table('areas')->insert([
            'id'    =>      400,
            'component_id' => '5',
            'code' => 'A-400',
            'name' => 'HUMANIDADES'
        ]);

        DB::table('areas')->insert([
            'id'    =>      501,
            'component_id' => '6',
            'code' => 'A-501',
            'name' => 'CIENCIAS DE LA COMPUTACION'
        ]);

    }
}
