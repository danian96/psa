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
            'component_id' => '2',     // valor absurdo
            'code' => 'A-100',
            'name' => 'Area 100'
        ]);

        DB::table('areas')->insert([
            'component_id' => '3',     // valor absurdo
            'code' => 'A-200',
            'name' => 'Area 200'
        ]);

        DB::table('areas')->insert([
            'component_id' => '4',     // valor absurdo
            'code' => 'A-300',
            'name' => 'Area 300'
        ]);

        DB::table('areas')->insert([
            'component_id' => '5',     // valor absurdo
            'code' => 'A-400',
            'name' => 'Area 400'
        ]);

        DB::table('areas')->insert([
            'component_id' => '6',     // valor absurdo
            'code' => 'A-501',
            'name' => 'Area 501'
        ]);

    }
}
