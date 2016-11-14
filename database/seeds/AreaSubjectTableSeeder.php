<?php

use Illuminate\Database\Seeder;

class AreaSubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // area 100
        foreach (range(1, 4) as $i) {
            DB::table('area_subject')->insert([
                'area_id'   =>  '1',
                'subject_id'    =>  $i
            ]);
        }

        //area 501
        foreach (range(1, 2) as $i) {
            DB::table('area_subject')->insert([
                'area_id'   =>  '2',
                'subject_id'    =>  $i
            ]);
        }
        foreach (range(1, 2) as $i) {
            DB::table('area_subject')->insert([
                'area_id'   =>  '2',
                'subject_id'    =>  ($i + 4)
            ]);
        }
    }
}
