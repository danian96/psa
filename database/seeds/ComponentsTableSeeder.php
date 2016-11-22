<?php

use Illuminate\Database\Seeder;

class ComponentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('components')->insert ([
            'type' => 'MANAGEMENT'
        ]);

        foreach (range(1, 5) as $index) {
            DB::table('components')->insert([
                'type' => 'AREA'
            ]);
        }

        foreach (range(1, 3) as $index) {
            DB::table('components')->insert ([
                'type' => 'FACULTY'
            ]);
        }

        foreach (range(1, 7) as $index) {
            DB::table('components')->insert ([
                'type' => 'CAREER'
            ]);
        }


    }
}
